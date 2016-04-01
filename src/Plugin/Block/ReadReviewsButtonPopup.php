<?php

/**
 * @file
 * Contains \Drupal\reevoomark\Plugin\Block\ReadReviewsButtonPopup.
 */

namespace Drupal\reevoomark\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'ReadReviewsButtonPopup' block.
 *
 * @Block(
 *  id = "read_reviews_button_popup",
 *  admin_label = @Translation("Read reviews button popup"),
 * )
 */
class ReadReviewsButtonPopup extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['read_reviews_button_popup']['#markup'] = 'Implement ReadReviewsButtonPopup.';

    return $build;
  }

}
