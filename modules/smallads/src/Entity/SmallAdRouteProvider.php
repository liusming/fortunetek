<?php

/**
 * @file
 * Contains \Drupal\smallads\Entity\SmallAdRouteProvider.
 */

namespace Drupal\smallads\Entity;

use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Entity\Routing\EntityRouteProviderInterface;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

/**
 * Provides routes for the user entity.
 */
class SmallAdRouteProvider implements EntityRouteProviderInterface {

  /**
   * {@inheritdoc}
   */
  public function getRoutes(EntityTypeInterface $entity_type) {
    $route_collection = new RouteCollection();

    $route = (new Route('ad/add/{smallad_type}'))
      ->setDefaults([
        '_controller' => 'Drupal\smallads\Controller\SmallAdController::add',
        '_title_callback' => 'Drupal\smallads\Controller\SmallAdController::addTitle',
      ])
      ->setRequirement('_permission', 'post ad');
    $route_collection->add('smallad.add', $route);

    $route = (new Route('/ad/{smallad}'))
      ->setDefaults([
        '_controller' => 'Drupal\smallads\SmallAdViewController::view',
        '_title_callback' => 'Drupal\smallads\SmallAdViewController::title',
      ])
      ->setRequirement('_entity_access', 'smallad.view');
    $route_collection->add('entity.smallad.canonical', $route);

    $route = (new Route('/ad/{smallad}/edit'))
      ->setDefaults([
        '_entity_form' => 'smallad.edit',
        '_title_callback' => 'Drupal\smallads\SmallAdViewController::editTitle',
      ])
      ->setRequirement('_entity_access', 'smallad.update');
    $route_collection->add('entity.smallad.edit_form', $route);

    $route = (new Route('/ad/{smallad}/delete'))
      ->setDefaults([
        '_entity_form' => 'smallad.delete',
        '_title' => 'Are you sure?',
      ])
      ->setRequirement('_entity_access', 'smallad.delete');
    $route_collection->add('entity.smallad.delete_form', $route);

    return $route_collection;
  }

}
