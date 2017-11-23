<?php

/**
 * @file
 * Contains \Drupal\smallads\SmallAdViewController.
 */

namespace Drupal\smallads;

use Drupal\Core\Entity\Controller\EntityViewController;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Component\Utility\SafeMarkup;

/**
 * Returns responses for smallad routes.
 */
class SmallAdViewController extends EntityViewController {
  
  public function title(EntityInterface $smallad) {
    return t(
      '@type: @title',
      [
        '@type' => $smallad->type->entity->label(),
        '@title' => SafeMarkup::checkPlain($smallad->label())
      ]
    );
  }

  public function addTitle(RouteMatchInterface $routeMatch) {
    if ($term = smallad_valid_type_tid($routeMatch->getParameter('taxonomy_term'))) {
      return t(
        'Create @type',
        ['@type' =>  SafeMarkup::checkPlain($term->label())]
      );
    }
  }

  public function editTitle(EntityInterface $smallad) {
    return t(
      'Edit @type', 
      ['@type' => SafeMarkup::checkPlain($smallad->type->entity->label())]);
  }

  //don't remove this because the first arg is checked against the route in the reflection class
  public function view(EntityInterface $smallad, $view_mode = 'default', $langcode = NULL) {
    return parent::view($smallad, $view_mode, $langcode);
  }

}
