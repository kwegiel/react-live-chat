<? php

namespace Drupal\react_live_chat\Controller;

use Drupal\core\Controller\ControllerBase;

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