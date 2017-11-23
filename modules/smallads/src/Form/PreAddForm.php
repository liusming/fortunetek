<?php

/**
 * @file
 * Contains \Drupal\smallads\Form\PreAddForm.
 */

namespace Drupal\smallads\Form;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Routing\RedirectDestinationTrait;
use Drupal\Core\Routing\UrlGeneratorTrait;
use Drupal\Core\Form\FormBase;

/**
 * Form controller for the user password forms.
 */
class PreAddForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'smallads_preadd';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state, $adType = NULL) {
    
    foreach (\Drupal::entityManager()->getStorage('smallad_type')->loadMultiple() as $type) {
      $options[$type->id()] = $type->label();
    }
    
    if ($adType) {
      $form['type'] = [
        '#type' => 'hidden', 
        '#value' => $adType
      ];
    }
    else {
      $form['type'] = [
        '#title' => $this->t('Type'),
        '#type' => 'radios',
        '#options' => $options,
        '#required' => TRUE,
        '#weight' => 1
      ];
    }
    $form['title'] = [
      '#title' => $this->t('Title'),
      '#type' => 'textfield',
      '#placeholder' => t('Title....'),
      '#weight' => 2,
      '#size' => 15//needs to be fixed with css to 100%
    ];
    $form['actions'] = [
      '#type' => 'actions',
      'submit' => [
        '#type' => 'submit',
        '#value' => t('Next'),
      ],
      '#weight' => 3
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $values = $form_state->getValues();
    $form_state->setRedirect(
      'smallad.add',
      ['smallad_type' => $values['type']],
      ['query' => ['title' => $values['title']]]
    );
  }

}

