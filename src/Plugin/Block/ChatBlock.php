<?php
/**
 * @file
 * Contains \Drupal\reactjs_example\Plugin\Block\ChatBlock.
 */

namespace Drupal\reactjs_example\Plugin\Block;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'React Live Chat Block' block.
 *
 * @Block(
 *  id = "react_chat",
 *  admin_label = @Translation("React Live Chat"),
 * )
 */
class ChatBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['react_chat']['#markup'] = '<div id="reactchat"></div>';    
    return $build;
  }
}