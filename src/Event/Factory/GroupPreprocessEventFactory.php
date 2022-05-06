<?php

namespace Drupal\preprocess_group_event_dispatcher\Event\Factory;

use Drupal\preprocess_event_dispatcher\Event\AbstractPreprocessEvent;
use Drupal\preprocess_event_dispatcher\Factory\PreprocessEventFactoryInterface;
use Drupal\preprocess_group_event_dispatcher\Event\GroupPreprocessEvent;
use Drupal\preprocess_group_event_dispatcher\Event\Variables\GroupEventVariables;

/**
 * Class GroupPreprocessEventFactory.
 */
class GroupPreprocessEventFactory implements PreprocessEventFactoryInterface {

  public function createEvent(array &$variables): AbstractPreprocessEvent
  {
    return new GroupPreprocessEvent(
      new GroupEventVariables($variables)
    );
  }

  public function getEventHook(): string
  {
    return GroupPreprocessEvent::getHook();
  }

}
