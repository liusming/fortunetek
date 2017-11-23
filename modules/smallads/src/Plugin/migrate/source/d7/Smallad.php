<?php

/**
 * @file
 * Contains \Drupal\smallads\Plugin\migrate\source\d7\Smallad.
 */

namespace Drupal\smallads\Plugin\migrate\source\d7;

use Drupal\migrate\Row;
use \Drupal\migrate_drupal\Plugin\migrate\source\d7\FieldableEntity;

/**
 * Drupal 7 smallads from nodes in source db.
 *
 * @MigrateSource(
 *   id = "d7_smallad"
 * )
 */
class Smallad extends FieldableEntity implements \Drupal\migrate\Plugin\MigrateSourceInterface {

  /**
   * {@inheritdoc}
   */
  public function query() {
    return $this->select('node', 'n')
      ->fields('u')
      ->condition('type', 'proposition')
      ->innerJoin('offers_wants', 'ow', 'ow.nid = n..nid')
      ->addField('ow', 'end', 'end')
      ->addField('ow', 'want', 'want');
  }

  /**
   * {@inheritdoc}
   */
  public function prepareRow(Row $row) {
    $row = parent::prepareRow($row);
    $fields = $this->getFields('node', 'proposition');
    debug($fields);
    $row->setSourceProperty('type', $fields['want'] ? 'want' : 'offer');
    $row->setSourceProperty('date', $fields['end']);
    debug($row);
  }

  /**
   * {@inheritdoc}
   */
  public function fields() {
    $fields = parent::fields();
    $fields['end'] = t('Expiry date');
    $fields['want'] = t('Smallad_type');
    return $fields;
  }

  /**
   * {@inheritdoc}
   */
  public function getIds() {
    $ids['nid']['type'] = 'integer';
    $ids['nid']['alias'] = 'n';
    return $ids;
  }

}
