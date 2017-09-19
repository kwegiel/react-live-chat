<?php
/**
 * @file
 * Contains \Drupal\react_chat\Plugin\Block\ChatBlock.
 */

 namespace Drupal\react_chat\Plugin\Block; 
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
        return array(
          '#markup' => $this->t('Hello, World!'),
        );
      }
    
    }