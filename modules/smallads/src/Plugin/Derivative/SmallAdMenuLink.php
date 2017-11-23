<?php

/**
 * @file
 * Contains \Drupal\smallads\Plugin\Derivative\SmallAdMenuLink.
 */

namespace Drupal\smallads\Plugin\Derivative;

use Drupal\Core\Plugin\Discovery\ContainerDeriverInterface;
use Drupal\Component\Plugin\Derivative\DeriverBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 *  A link to add each type of add in no particular order.
 */
class SmallAdMenuLink extends DeriverBase implements ContainerDeriverInterface {

  var $derivatives = [];
  var $smallAdTypeStorage;

  /**
   * {@inheritDoc}
   *
   */
  public function __construct($smallAdTypeStorage) {
    $this->smallAdTypeStorage = $smallAdTypeStorage;
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
    foreach ($this->smallAdTypeStorage->loadMultiple() as $id => $type) {
      $this->derivatives["smallad.add.{$id}.link"] = [
        'title' => 'Add '.$type->label(),
        //@todo I don't know how to translate the title
        'title_arguments' => ['@type' => $type->label()],
        'route_name' => 'smallad.add',
        'route_parameters' => ['smallad_type' => $id],
        'provider' => 'smallads',
        'menu_name' => 'account',//@todo find somewhere better to put these
        'weight' => $type->getWeight()
      ];
    }

    //@todo might be nice to have some translated aliases for this
    return $this->derivatives;
  }
}
