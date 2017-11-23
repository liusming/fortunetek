<?php

/**
 * @file
 * Contains \Drupal\smallads\Controller\SmallAdController.
 */

namespace Drupal\smallads\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Returns responses for SmallAd routes.
 */
class SmallAdController extends ControllerBase  {

  /**
   * Provides the node submission form.
   *
   * @param Drupal\Core\Config\Entity\ConfigEntityBundleBase $smallad_type
   *   The smallad type entity for the smallad.
   *
   * @return array
   *   A smallad creation form.
   */
  public function add(ConfigEntityBundleBase $smallad_type) {
    $smallad = $this->entityManager()->getStorage('smallad')->create(array(
      'type' => $smallad_type->id(),
    ));
    return $this->entityFormBuilder()->getForm($smallad);
  }
  
  public function addTitle(ConfigEntityBundleBase $smallad_type) {
    return $smallad_type->label();
  }

}
