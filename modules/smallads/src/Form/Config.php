<?php

/**
 * @file
 * Contains \Drupal\smallads\Form\Config.
 *
 */
namespace Drupal\smallads\Form;

use Drupal\Core\Url;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Routing\UrlGeneratorTrait;
use Drupal\taxonomy\Entity\Term;
use Drupal\taxonomy\Entity\Vocabulary;
use Drupal\field\Entity\FieldConfig;
use Drupal\field\Entity\FieldStorageConfig;
use Drupal\Core\Entity\Entity\EntityViewDisplay;
use Drupal\Core\Entity\Entity\EntityFormDisplay;
use Symfony\Component\DependencyInjection\ContainerInterface;

class Config extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormID() {
    return 'smallads_config_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->configFactory->get('smallads.settings');
    $options = [];
    foreach (Vocabulary::loadMultiple() as $vid => $vocab) {
      $options[$vid] = $vocab->label();
    }

    $form['default_expiry'] = [
      '#title' => $this->t('Default expiry date'),
      '#description' => $this->t('Default value of the small ad expiry form widget'),
      '#type' => 'select',
      '#options' => [
        //'' => t('Permanent'),the date widget can't handle empty''
        '+1 week' => $this->t('1 week'),
        '+1 month' => $this->t('1 month'),
        '+3 months' => $this->t('@count months', ['@count' => 3]),
        '+6 months' => $this->t('@count months', ['@count' => 6]),
        '+1 year' => $this->t('1 year')
      ],
      '#default_value' => $config->get('default_expiry')
    ];
    $eM = \Drupal::entityManager();
    $options = [];
    foreach ($eM->getFieldMapByFieldType('geofield') as $entity_type_id => $field_info) {
      if (in_array($entity_type_id, ['user', 'smallad'])) {
        $field_definitions = $eM->getFieldDefinitions($entity_type_id, $bundle);
        foreach ($field_info  as $field_name => $info) {
          foreach ($info['bundles'] as $bundle) {
            $key = $entity_type_id.':'.$bundle.':'.$field_name;
            $label = $eM->getDefinition($entity_type_id)->getLabel() .' - '.
              $field_definitions[$field_name]->getLabel();
            $options[$key] = $label;
          }
        }
      }
    }
    //this is more important when we connect to the REST service
    $form['geo_field'] = [
      '#title' => $this->t('Coordinates field instance'),
      '#description' => $this->t('Either on the user or the smallad'),
      '#type' => 'select',
      '#options' => $options,
      '#default_value' => $config->get('geo_field'),
      '#empty_value' => $this->t('- None -'),
      '#weight' => 10
    ];
    /*
    if (module_exists('mcapi_forms')) {//@todo
      $form['ow_convert_path_incoming'] = [
        '#title' => $this->t('Conversion link path') .' ('.t('Offers').')',
        '#description' => $this->t("Path to a 1st party transaction form with type field either showing or preset to 'incoming'"),
        '#type' => 'textfield',
        '#default_value' => variable_get('ow_convert_path_incoming', 'transact/1stparty')
      );
      $form['ow_convert_path_outgoing'] = [
        '#title' => vt('Conversion link path') .' ('.t('Wants').')',
        '#description' => $this->t("Path to a 1st party transaction form with type field either showing or preset to 'outgoing'"),
        '#type' => 'textfield',
        '#default_value' => variable_get('ow_convert_path_outgoing', 'transact/1stparty')
      );
    }
     *
     */
    //@todo compose emails for expiry

    return parent::buildForm($form, $form_state);
  }

  public function validateForm(array &$form, FormStateInterface $form_state) {

  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $values = $form_state->getValues();
    $config = $this->configFactory->getEditable('smallads.settings');

    $config
      ->set('default_expiry', $values['default_expiry'])
      ->set('geo_field', $values['geo_field'])
      ->save();

    parent::submitForm($form, $form_state);
    \Drupal::service('router.builder')->rebuild();

  }

  protected function getEditableConfigNames() {
    return ['smallads.settings'];
  }

}
