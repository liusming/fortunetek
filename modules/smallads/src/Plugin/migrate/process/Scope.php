<?php

/**
 * @file
 * Contains \Drupal\smallads\Plugin\migrate\process\Scope.
 */

namespace Drupal\smallads\Plugin\migrate\process;

use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\Row;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * @MigrateProcessPlugin(
 *   id = "want_type"
 * )
 */
class Scope extends ProcessPluginBase implements ContainerFactoryPluginInterface {

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static($configuration, $plugin_id, $plugin_definition);
  }

  /**
   * {@inheritdoc}
   */
  public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {
    //scope used to be the node status, 1 or 0
    //@see \Drupal\smallads\Entity\SmallAd for constants
    if ($value) {
      return Smallad::SCOPE_SITE;
    }
    else {
      return Smallad::SCOPE_PRIVATE;
    }
  }

}
