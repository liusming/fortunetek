<?php

/**
 * @file
 * Contains \Drupal\smallads\Plugin\Derivative\SmallAdActions.
 */

namespace Drupal\smallads\Plugin\Derivative;

use Drupal\Core\Plugin\Discovery\ContainerDeriverInterface;
use Drupal\Component\Plugin\Derivative\DeriverBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides local action definitions to create a wallet for all entities of types configured.
 */
class SmallAdActions extends DeriverBase implements ContainerDeriverInterface {

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
    foreach ($this->storage->loadMultiple() as $smallad_type) {
      $id = $smallad_type->id();

      $this->derivatives['smallad_add.'.$id] = [
        'title' => 'Create '.$smallad_type->label(),//@todo is this translated
        'route_name' => 'smallad.add',
        'route_parameters' => ['smallad_type' => $id],
        'appears_on' => [
          'view.smallads_directory.collection',
        ]
      ];
    }
    return $this->derivatives;
  }
}
