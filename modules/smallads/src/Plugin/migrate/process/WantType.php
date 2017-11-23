kkkkk<?php

/**
 * @file
 * Contains \Drupal\smallads\Plugin\migrate\process\WantType.
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
class WantType extends ProcessPluginBase implements ContainerFactoryPluginInterface {

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
    //the module has already installed with offer and want types defined
    if (!$value) {
      //so we just need to delete the want
      \Drupal\smallads\Entity\SmallAdType::load('want')->delete();
    }
    else echo 'no changes';
  }

}
