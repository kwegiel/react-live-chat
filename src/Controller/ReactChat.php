<? php

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
       '#type' => 'markup';
       '#markup' => $this->t('React Live Chat');
     );
   }
}