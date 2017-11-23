<?php

/**
 * @file
 * Definition of Drupal\smallads\Plugin\views\argument_default\AdTypeFromContext
 * @todo tidy this up since smallad_type_from_route_match was added
 */

namespace Drupal\smallads\Plugin\views\argument_default;

use Drupal\smallads\Entity\Smallad;
use Drupal\views\Plugin\views\argument_default\ArgumentDefaultPluginBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * The fixed argument default handler.
 * Works out from the url what ad type it is. This is especially useful for blocks
 * @todo test caching of the view or block
 *
 * @ingroup views_argument_default_plugins
 *
 * @ViewsArgumentDefault(
 *   id = "ad_type_from_context",
 *   title = @Translation("Small ad type from route context")
 * )
 */
class AdTypeFromContext extends ArgumentDefaultPluginBase {

  private $routeMatch;

  /**
   * Constructs a PluginBase object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param object $route_match
   */
  public function _____construct(array $configuration, $plugin_id, $plugin_definition, $route_match) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->routeMatch = $route_match;
  }

  /**
   * {@inheritdoc}
   */
  public static function _____create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('current_route_match'),
      $container->get('entity.manager')->getStorage('smallad_type')
    );
  }


  /**
   * {inheritdoc}
   */
  protected function defineOptions() {
    $options = parent::defineOptions();
    $options['fallback'] = ['default' => 'showall'];
    return $options;
  }

  /**
   * Return the default argument.
   */
  public function getArgument() {
    if ($type = smallad_type_from_route_match()) {
      return $type;
    }
    $this->view->build_info['fail'] = TRUE; return;
    //can't get the following to work
    $fallback = $this->options['fallback'];
    if ($fallback == 'hide') {
      //this should hide the view.
      $this->view->build_info['fail'] = TRUE;
    }
    elseif ($fallback == 'showall') {
      //return NULL;
      $types = \Drupal\smallads\Entity\SmallAdType::loadMultiple();
      return array_keys($types);
    }
  }

  /**
   * {@inheritdoc}
   */
  public function isCacheable() {
    return FALSE;
  }

}
