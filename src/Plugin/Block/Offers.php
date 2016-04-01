<?php

/**
 * @file
 * Contains \Drupal\reevoomark\Plugin\Block\Offers.
 */

namespace Drupal\reevoomark\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Offers' block.
 *
 * @Block(
 *  id = "offers",
 *  admin_label = @Translation("Offers"),
 * )
 */
class Offers extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['offers']['#markup'] = 'Implement Offers.';

    return $build;
  }

}
