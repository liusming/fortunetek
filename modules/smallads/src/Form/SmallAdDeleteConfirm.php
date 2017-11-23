<?php

/**
 * @file
 * Contains \Drupal\smallads\SmallAdDeleteConfirm.
 */

namespace Drupal\smallads\Form;

use Drupal\Core\Entity\ContentEntityDeleteForm;

/**
 * The form to confirm deletion of an ad
 */
class SmallAdDeleteConfirm extends ContentEntityDeleteForm {

  /**
   * {@inheritdoc}
   */
  public function getDescription() {
    return $this->t("Ads can be deleted or simply not shown to other members by reducing their scope.");
  }

}
