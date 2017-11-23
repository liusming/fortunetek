<?php

/**
 * @file
 * Contains \Drupal\smallads\Plugin\Block\NestedCategoriesBlock.
 */

namespace Drupal\smallads\Plugin\Block;


use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a list of category links, with the number of smallads in each, linking the view
 *
 * @Block(
 *   id = "smallad_categories_nested",
 *   admin_label = @Translation("Ads by Category"),
 *   category = @Translation("Lists (Views)")
 * )
 */
class NestedCategoriesBlock extends BlockBase implements ContainerFactoryPluginInterface {

  function __construct() {
    //@todo determine what type to show,
  }

  /**
   * {@inheritdoc}
   * @todo not sure why this function is abstract in Blockbase in Beta 11. Shouldn't be needed here.
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition
    );
  }

  /**
   * {@inheritdoc}
   */
  protected function blockAccess(\Drupal\Core\Session\AccountInterface $account) {
    // Only grant access to users with the 'access news feeds' permission.
    return AccessResult::allowedIfHasPermission($account, 'post ad');
  }

  /**
   * {@inheritdoc}
   * @see thtp://pixelclever.com/official-documentation-jquery-menu-api (currently broken link)
   *
   * @note watch out for the taxonomyblocks module
   */
  public function build() {
    return ['#markup' => 'Nested catgories block needs some serious javascript to work, such as jquerymenu'];
    //see version 7.x of offers_wants
  }

}
