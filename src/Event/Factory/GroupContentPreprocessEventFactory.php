<?php

namespace Drupal\preprocess_group_event_dispatcher\Event\Factory;

use Drupal\preprocess_event_dispatcher\Event\AbstractPreprocessEvent;
use Drupal\preprocess_event_dispatcher\Factory\PreprocessEventFactoryInterface;
use Drupal\preprocess_group_event_dispatcher\Event\GroupContentPreprocessEvent;
use Drupal\preprocess_group_event_dispatcher\Event\Variables\GroupEventVariables;

/**
 * Class GroupContentPreprocessEventFactory.
 */
class GroupContentPreprocessEventFactory implements PreprocessEventFactoryInterface {

  public function createEvent(array &$variables): AbstractPreprocessEvent
  {
    return new GroupContentPreprocessEvent(
      new GroupEventVariables($variables)
    );
  }

  public function getEventHook(): string
  {
    return GroupContentPreprocessEvent::getHook();
  }

}
