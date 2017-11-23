<?php

/**
 * @file
 * Contains \Drupal\smallads\Entity\SmallAdInterface.
 * @todo document this
 *
 */

namespace Drupal\smallads\Entity;


interface SmallAdInterface extends \Drupal\Core\Entity\ContentEntityInterface {
  
  /**
   * 
   */
  public static function expiresDefault();

  /**
   * 
   */
  function expire();

  /**
   * @see 
   */
  public function getChangedTime();
  
  /**
   * 
   * @param type $include_private
   */
  public static function getScopes($include_private = TRUE);

}
