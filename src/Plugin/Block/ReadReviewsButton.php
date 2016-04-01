<?php

/**
 * @file
 * Contains \Drupal\reevoomark\Plugin\Block\ReadReviewsButton.
 */

namespace Drupal\reevoomark\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'ReadReviewsButton' block.
 *
 * @Block(
 *  id = "read_reviews_button",
 *  admin_label = @Translation("Read reviews button"),
 * )
 */
class ReadReviewsButton extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['read_reviews_button']['#markup'] = 'Implement ReadReviewsButton.';

    return $build;
  }

}
