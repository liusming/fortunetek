<?php

/**
 * @file
 * Contains \Drupal\smallads\Plugin\migrate\process\Expires.
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
class Expires extends ProcessPluginBase implements ContainerFactoryPluginInterface {

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
    //this is a timestamp or 0 meant never expire
    if ($value) {
      return gmdate(DATETIME_DATETIME_STORAGE_FORMAT, $value);
    }
    else return NULL;//@todo see what this does to the date field
  }

}
