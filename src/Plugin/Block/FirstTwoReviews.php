<?php

/**
 * @file
 * Contains \Drupal\reevoomark\Plugin\Block\FirstTwoReviews.
 */

namespace Drupal\reevoomark\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'FirstTwoReviews' block.
 *
 * @Block(
 *  id = "first_two_reviews",
 *  admin_label = @Translation("First two reviews"),
 * )
 */
class FirstTwoReviews extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['first_two_reviews']['#markup'] = 'Implement FirstTwoReviews.';

    return $build;
  }

}
