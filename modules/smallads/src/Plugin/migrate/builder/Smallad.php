<?php

/**
 * @file
 * Contains \Drupal\smallads\Plugin\migrate\builder\d7\Smallad.
 * @deprecated
 */

namespace Drupal\smallads\Plugin\migrate\builder\d7;

use Drupal\migrate\Entity\Migration;
use Drupal\migrate_drupal\Plugin\migrate\builder\CckBuilder;

/**
 * @PluginID("d7_smallad")
 */
class Smallad extends CckBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildMigrations(array $template) {
    $migrations = [];

    // Read all field instance definitions in the source database.
    $fields = array();
    foreach ($this->getSourcePlugin('d7_field_instance', $template['source']) as $field) {
      $info = $field->getSource();
      $fields[$info['entity_type']][$info['bundle']][$info['field_name']] = $info;
    }

    foreach ($this->getSourcePlugin('d7_smallad_type', $template['source']) as $node_type) {
      $bundle = $smallad_type->getSourceProperty('type');
      $values = $template;
      $values['id'] .= '__' . $bundle;
      $values['label'] = $this->t('@label (@type)', ['@label' => $values['label'], '@type' => $smallad_type->getSourceProperty('name')]);
      $values['source']['smallad_type'] = $bundle;
      $migration = Migration::create($values);

      if (isset($fields['smallad'][$bundle])) {
        foreach ($fields['smallad'][$bundle] as $field => $data) {
          if ($this->cckPluginManager->hasDefinition($data['type'])) {
            $this->getCckPlugin($data['type'])
              ->processCckFieldValues($migration, $field, $data);
          }
          else {
            $migration->setProcessOfProperty($field, $field);
          }
        }
      }

      $migrations[] = $migration;
    }

    return $migrations;
  }

}
