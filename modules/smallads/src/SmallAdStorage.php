<?php

/**
 * @file
 * Contains \Drupal\smallads\SmallAdStorage.
 *
 */

namespace Drupal\smallads;

use Drupal\Core\Entity\Sql\SqlContentEntityStorage;


class SmallAdStorage extends SqlContentEntityStorage {
  
  public function count($term_id = NULL) {
    $query = $this->entityQuery('smallad')->count();
    if ($term_id) {
      $query->condition(SMALLAD_CATEGORIES, $term_id);
    }
    return $query->execute();
  }
  

}
