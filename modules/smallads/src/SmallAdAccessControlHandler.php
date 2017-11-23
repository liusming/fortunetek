<?php

/**
 * @file
 * Contains \Drupal\smallads\SmallAdAccessControlHandler.
 */

namespace Drupal\smallads;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Defines an access controller for the SmallAd entity
 */
class SmallAdAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $smallAd, $operation, AccountInterface $account) {
    if ($operation == 'delete' && $smallAd->isNew()) {
      return AccessResult::forbidden()->cacheUntilEntityChanges($smallAd);
    }
    if ($admin_permission = $this->entityType->getAdminPermission()) {
      return AccessResult::allowedIfHasPermission($account, $this->entityType->getAdminPermission());
    }
    //owners can do anything with their own content
    if ($smallAd->getOwnerId() == $account->id()) {
      return AccessResult::allowed()->cachePerUser()->cacheUntilEntityChanges($smallAd);
    }
    if ($operation = 'view') {
      switch($smallAd->scope->value) {
        case 4:
          return AccessResult::allowed()->cacheUntilEntityChanges($smallAd);
        case 3:
          debug('configure smallAds access for REST requests');
        case 2:
          return AccessResult::allowedIfHasPermission($account, 'access content');
        case 1:
          debug('configure smallAds access for Organic groups');
        case 0:
          return AccessResult::forbidden()->cacheUntilEntityChanges($smallAd);
      }
    }
  }

}
