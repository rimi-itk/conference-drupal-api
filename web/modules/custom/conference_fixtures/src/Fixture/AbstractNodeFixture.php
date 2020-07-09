<?php

namespace Drupal\conference_fixtures\Fixture;

use Drupal\content_fixtures\Fixture\AbstractFixture;
use Drupal\node\NodeStorageInterface;

/**
 * Class AbstractNodeFixture
 *
 * @package Drupal\conference_fixtures\Fixture
 */
abstract class AbstractNodeFixture extends AbstractFixture {
  /**
   * @var \Drupal\node\NodeStorageInterface
   */
  protected $nodeStorage;

  /**
   * Constructor.
   *
   * @param \Drupal\node\NodeStorageInterface $nodeStorage
   */
  public function __construct(NodeStorageInterface $nodeStorage) {
    $this->nodeStorage = $nodeStorage;
  }

}
