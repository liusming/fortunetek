<?php

/**
 * @file
 * Contains \Drupal\smallads\Views\SmallAdViewsData.
 *
 */

namespace Drupal\smallads;

use Drupal\views\EntityViewsData;

class SmallAdViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();
    //@see Drupal\smallads\Plugin\views\argument_default\AdTypeFromContext
    $data['smallad_field_data']['type']['argument']['name field'] = 'type';

    $data['smallad_field_data']['smallad_bulk_form'] = [
      'title' => t('Bulk smallad update'),
      'help' => t('A form element that lets you run operations on multiple smallads.'),
      'field' => [
        'id' => 'bulk_form',
      ],
    ];

    return $data;
  }
}
