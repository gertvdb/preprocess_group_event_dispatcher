<?php

namespace Drupal\preprocess_group_event_dispatcher\Event\Variables;

use Drupal\Core\Entity\EntityInterface;
use Drupal\group\Entity\GroupInterface;
use Drupal\preprocess_event_dispatcher\Variables\AbstractEntityEventVariables;
use Drupal\user\UserInterface;

/**
 * Class GroupEventVariables.
 */
class GroupEventVariables extends AbstractEntityEventVariables {

  /**
   * @return EntityInterface
   */
  public function getEntity(): EntityInterface
  {
    return $this->getGroup();
  }

  /**
   * Get the group.
   *
   * @return GroupInterface
   *   The user.
   */
  public function getGroup(): GroupInterface {
    return $this->variables['group'];
  }

}
