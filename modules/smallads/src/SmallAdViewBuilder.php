<?php

/**
 * @file
 * Definition of Drupal\smallads\SmallAdViewBuilder.
 */

namespace Drupal\smallads;

use Drupal\Core\Entity\EntityViewBuilder;
use Drupal\Core\Entity\EntityInterface;

/**
 * Render controller for wallets.
 */
class SmallAdViewBuilder extends EntityViewBuilder {

  protected function getBuildDefaults(EntityInterface $entity, $view_mode) {
    $build = parent::getBuildDefaults($entity, $view_mode);
    if ($view_mode != 'default') {
      $build['#theme'] = 'smallad_'.$view_mode;
    }
    $build['#attached']['library'][] = 'smallads/css';
    return $build;
  }
}
