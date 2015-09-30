<?php

/**
 * @file
 * Contains \Drupal\comment\Tests\Migrate\d6\MigrateCommentVariableEntityDisplayTest.
 */

namespace Drupal\comment\Tests\Migrate\d6;

/**
 * Upgrade comment variables to entity.display.node.*.default.yml.
 *
 * @group migrate_drupal_6
 */
class MigrateCommentVariableEntityDisplayTest extends MigrateCommentVariableDisplayBase {

  /**
   * The migration to run.
   */
  const MIGRATION = 'd6_comment_entity_display';

  /**
   * The node types being used.
   */
  protected $types = array('page', 'story', 'article');

  /**
   * Tests comment variables migrated into an entity display.
   */
  public function testCommentEntityDisplay() {
    foreach ($this->types as $type) {
      $component = entity_get_display('node', $type, 'default')->getComponent('comment');
      $this->assertIdentical('hidden', $component['label']);
      $this->assertIdentical('comment_default', $component['type']);
      $this->assertIdentical(20, $component['weight']);
    }
  }
}
