<?php

namespace Drupal\preprocess_group_event_dispatcher\Event\Variables;

use Drupal\Core\Entity\EntityInterface;
use Drupal\group\Entity\GroupContentInterface;
use Drupal\group\Entity\GroupInterface;
use Drupal\preprocess_event_dispatcher\Variables\AbstractEntityEventVariables;

/**
 * Class GroupContentEventVariables.
 */
class GroupContentEventVariables extends AbstractEntityEventVariables {

  /**
   * @return EntityInterface
   */
  public function getEntity(): EntityInterface
  {
    return $this->getGroupContent();
  }

  /**
   * Get the group content.
   *
   * @return GroupContentInterface
   *   The group content.
   */
  public function getGroupContent(): GroupContentInterface {
    return $this->variables['group_content'];
  }

}
