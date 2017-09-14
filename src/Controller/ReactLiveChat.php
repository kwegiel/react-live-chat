<? php

/**
 * @file
 * Contains \Drupal\react_live_chat\ReactLiveChat.
 */

namespace Drupal\react_live_chat;

use Drupal\Core\Controller\ControllerBase;

class ReactLiveChat extends ControllerBase {
  /**
   * Display the markup.
   *
   * @return array
   */
   public function content() {
     return array(
       '#type' => 'markup';
       '#markup' => $this->t('React Live Chat');
     );
   }
}