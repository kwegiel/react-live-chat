<?php

/**
 * @file
 * Contains \Drupal\react_chat\ReactLiveChat.
 */

namespace Drupal\react_chat\Controller;

use \Drupal\Core\Controller\ControllerBase;

class ReactChat extends ControllerBase {
  /**
   * Display the markup.
   *
   * @return array
   */
   public function content() {
     return array(
       '#type' => 'markup',
       '#markup' => '<div id="reactchat"></div>',
       '#attached' => [
          'library' =>  [
              'react_chat/react.min',
              'react_chat/react.dom.min',
              'react_chat/react.chat'
          ],
        ],
     );
   }
}