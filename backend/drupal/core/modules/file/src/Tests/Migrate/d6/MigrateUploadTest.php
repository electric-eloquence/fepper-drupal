<?php

/**
 * @file
 * Contains \Drupal\file\Tests\Migrate\d6\MigrateUploadTest.
 */

namespace Drupal\file\Tests\Migrate\d6;

use Drupal\node\Entity\Node;

/**
 * Migrate association data between nodes and files.
 *
 * @group migrate_drupal_6
 */
class MigrateUploadTest extends MigrateUploadBase {

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();
    $id_mappings = array(
      'd6_node:*' => array(
        array(
          array(0),
          array(0),
        ),
      ),
    );
    $this->prepareMigrations($id_mappings);
    $this->executeMigration('d6_upload');
  }

  /**
   * Test upload migration from Drupal 6 to Drupal 8.
   */
  function testUpload() {
    $node_storage = $this->container->get('entity.manager')->getStorage('node');
    $node_storage->resetCache(array(1, 2));
    $nodes = Node::loadMultiple(array(1, 2));
    $node = $nodes[1];
    $this->assertIdentical(1, count($node->upload));
    $this->assertIdentical('1', $node->upload[0]->target_id);
    $this->assertIdentical('file 1-1-1', $node->upload[0]->description);
    $this->assertIdentical(FALSE, $node->upload[0]->isDisplayed());

    $node = $nodes[2];
    $this->assertIdentical(2, count($node->upload));
    $this->assertIdentical('3', $node->upload[0]->target_id);
    $this->assertIdentical('file 2-3-3', $node->upload[0]->description);
    $this->assertIdentical(FALSE, $node->upload[0]->isDisplayed());
    $this->assertIdentical('2', $node->upload[1]->target_id);
    $this->assertIdentical(TRUE, $node->upload[1]->isDisplayed());
    $this->assertIdentical('file 2-3-2', $node->upload[1]->description);
  }

}
