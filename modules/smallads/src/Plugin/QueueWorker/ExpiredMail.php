<?php

/**
 * @file
 * Contains \Drupal\smallads\Plugin\QueueWorker\ExpiredMail.
 */

namespace Drupal\smallads\Plugin\QueueWorker;

use Drupal\Core\Queue\QueueWorkerBase;

/**
 * Updates a feed's items.
 *
 * @QueueWorker(
 *   id = "smallads_expired_mail",
 *   title = @Translation("Smallad expiry notification"),
 *   cron = {"time" = 60}
 * )
 */
class ExpiredMail extends QueueWorkerBase {

  /**
   * {@inheritdoc}
   */
  public function processItem($ad_id) {
    $ad = SmallAd::load($ad_id);
    $ad->expire();
    $owner = $ad->getowner();
    \Drupal::service('plugin.manager.mail')
      ->mail('smallads',
        'expired',
        $owner->getEmail(),
        $owner->getPreferredLangcode(),
        ['ad' => $ad]
      );
  }

}
