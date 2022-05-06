<?php

namespace Drupal\preprocess_group_event_dispatcher\Event;

use Drupal\preprocess_event_dispatcher\Event\AbstractPreprocessEntityEvent;
use Drupal\preprocess_event_dispatcher\Event\PreprocessEntityEventInterface;

/**
 * Class GroupContentPreprocessEvent.
 */
final class GroupContentPreprocessEvent extends AbstractPreprocessEntityEvent implements PreprocessEntityEventInterface {

  public static function getHook(): string
  {
    return 'group_content';
  }

}
