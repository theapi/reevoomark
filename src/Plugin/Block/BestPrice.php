<?php

/**
 * @file
 * Contains \Drupal\reevoomark\Plugin\Block\BestPrice.
 */

namespace Drupal\reevoomark\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'BestPrice' block.
 *
 * @Block(
 *  id = "best_price",
 *  admin_label = @Translation("Best price"),
 * )
 */
class BestPrice extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['best_price']['#markup'] = 'Implement BestPrice.';

    return $build;
  }

}
