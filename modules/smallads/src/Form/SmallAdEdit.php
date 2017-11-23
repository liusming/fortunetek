<?php

/**
 * @file
 * Definition of Drupal\smallads\Form\SmallAdEdit.
 */

namespace Drupal\smallads\Form;

use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\taxonomy\Entity\Term;
use Drupal\smallads\Entity\Smallad;
use Drupal\Core\Datetime\DrupalDateTime;

class SmallAdEdit extends ContentEntityForm {

  /**
   * Constructs a SmallAdEdit object.
   *
   * @param \Drupal\Core\Entity\EntityManagerInterface $entity_manager
   * @param \Drupal\Core\Routing\RouteMatchInterfacee $routeMatch
   */
  public function __construct(RouteMatchInterface $routeMatch, $requestStack) {
    $this->query = $requestStack->getCurrentRequest()->query;
    $this->routeMatch = $routeMatch;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('current_route_match'),
      $container->get('request_stack')
    );
  }

  /**
   * Overrides Drupal\Core\Entity\ContentEntityForm::form().
   * @todo find out what happened to drupal_set_title
   */
  public function form(array $form, FormStateInterface $form_state) {
  
    $form = parent::form($form, $form_state);

    if ($this->query->has('title')) {
      $this->entity->title->value = $this->query->get('title');
    }

    if ($this->entity->isNew() && $this->routeMatch->getParameter('taxonomy_term')) {
      $form['type'] = [
        '#type' => 'value',
        '#value' => $this->routeMatch->getParameter('taxonomy_term')
      ];
    }
    
    //@todo shouldn't this be done in a field hook?
    $form['external_link']['widget'][0]['uri']['#field_prefix'] = 'http://';

    $form['scope']['widget'][0]['value']['#type'] = 'select';
    $form['scope']['widget'][0]['value']['#options'] = Smallad::getScopes(TRUE);
    //@todo set the min and max dates on $this->entity->expires - but how?
    
    //move the scope and expires widgets into one details field
    $form['published'] = [
      '#title' => $this->t('Visibilty'),
      '#description' => $this->t("When the ad expires, the scope reverts to 'Owner only'."),
      '#type' => 'details',
      '#open' => $this->entity->scope->value > 0,
      '#weight' => 25,
      'expires' => $form['expires'],
      'scope' => $form['scope']
    ];
    unset($form['expires']);
    unset($form['scope']);

    $form['uid']['widget'][0]['target_id']['#access'] = \Drupal::currentUser()->hasPermission('edit all ads');

    return $form;
  }

  public function validate(array $form, FormStateInterface $form_state) {

    //entity->expires->getValue() is a dateTime Object
    $this->entity = parent::validate($form, $form_state);//this does createDateFromFormat
   //entity->expires->getValue()is [0] => Array([value] => 2015-06-24)


    //couldn't be bothered to do proper entity validation, only form validation
    $diff = strtotime($this->entity->expires->value) > REQUEST_TIME;
    if ($diff > 0) {//expires in the future
      if ($this->entity->scope == Smallad::SCOPE_PRIVATE) {
        $message = $this->t('If the expiry date is after now, the scope must not be private');
        $form_state->setErrorByName('scope', $message);
      }
    }
    else {//expires in the past
      if ($this->entity->scope != Smallad::SCOPE_PRIVATE) {
        $message = $this->t('If the article is to be visible, the expiry must be AFTER now.');
        $form_state->setErrorByName('scope', $message);
      }
    }
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);
    
    if ($this->entity->expires->value > REQUEST_TIME) {
      drupal_set_message(
        $this->t(
          'The @type will expire on @date',
          [
            '@type' => $form_state->getFormObject()->getEntity()->type->entity->label(),
            '@date' => $this->entity->expires->view()[0]['#markup']
          ]
        )
      );
      //alternative...
      $diff = $this->entity->expires->value - REQUEST_TIME;
      drupal_set_message(
        $this->t(
          'Your ad will expire in @interval.',
          ['@interval' => \Drupal::service('date.formatter')->formatInterval($diff, 2)]
        )
      );
    }
    else {
      //drupal_set_message() seems not to survive the redirect
      drupal_set_message(
        t(
          'This @type is only visible to you',
          ['@type' => $this->entity->type->entity->label()]
        )
      );
    }
  }

  function save(array $form, FormStateInterface $form_state) {
    parent::save($form, $form_state);
    $form_state->setRedirect('entity.smallad.canonical', ['smallad' => $this->entity->id()]);
  }


}
