<?php

/**
 * @file
 * Contains \Drupal\smallads\Plugin\Derivative\SmallAdTasks.
 */

namespace Drupal\smallads\Plugin\Derivative;

use Drupal\Core\Plugin\Discovery\ContainerDeriverInterface;
use Drupal\Component\Plugin\Derivative\DeriverBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 *
 */
class SmallAdTasks extends DeriverBase implements ContainerDeriverInterface {

  var $derivatives = [];
  var $storage = [];

  /**
   * {@inheritDoc}
   *
   */
  public function __construct($smallad_type_storage) {
    $this->storage = $smallad_type_storage;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, $base_plugin_id) {
    return new static(
      $container->get('entity.manager')->getStorage('smallad_type')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getDerivativeDefinitions($base_plugin_definition) {
    $types = $this->storage->loadMultiple();
    if (empty($types)) {
      return [];
    }
    $parent_id = 'view.smallads_directory.page_list';
    //this is the default task
    $first_type = array_shift($types);
    //the first_type is the default
    $this->derivatives[$parent_id .'.all'] = [
      'title' => $first_type->label(),//how to translate this? title callback?
      'base_route' => $parent_id,
      'route_name' => $parent_id,
      'route_parameters' => ['arg_0' => $first_type->id()],
      'weight' => $first_type->getWeight(),
    ] + $base_plugin_definition;
    foreach ($types as $id => $type) {
      $this->derivatives[$parent_id .'.'. $id ] = [
        'title' => $type->label(),
        'base_route' => $parent_id,
        'route_name' => $parent_id,
        'route_parameters' => ['arg_0' => $id],
        'weight' => $type->getWeight(),
      ] + $base_plugin_definition;
    }

    return $this->derivatives;
  }
}
