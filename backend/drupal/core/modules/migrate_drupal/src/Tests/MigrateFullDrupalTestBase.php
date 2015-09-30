<?php

/**
 * @file
 * Contains \Drupal\migrate_drupal\Tests\MigrateFullDrupalTestBase.
 */

namespace Drupal\migrate_drupal\Tests;

use Drupal\migrate\Entity\Migration;
use Drupal\simpletest\TestBase;

/**
 * Test helper for running a complete Drupal migration.
 */
abstract class MigrateFullDrupalTestBase extends MigrateDrupalTestBase {

  /**
   * The group to which tests should belong in order for this test to run them.
   *
   * @var string
   */
  const TEST_GROUP = '';

  /**
   * Get the test classes that needs to be run for this test.
   *
   * @return array
   *   The list of fully-classified test class names.
   */
  protected function getTestClassesList() {
    $groups = \Drupal::getContainer()->get('test_discovery')->getTestClasses();
    return isset($groups[static::TEST_GROUP]) ? array_keys($groups[static::TEST_GROUP]) : [];
  }

  /**
   * {@inheritdoc}
   */
  protected function tearDown() {
    // Move the results of every class under ours. This is solely for
    // reporting, the filename will guide developers.
    self::getDatabaseConnection()
      ->update('simpletest')
      ->fields(array('test_class' => get_class($this)))
      ->condition('test_id', $this->testId)
      ->execute();
    parent::tearDown();
  }

  /**
   * Test the complete Drupal migration.
   */
  public function testDrupal() {
    $classes = $this->getTestClassesList();
    foreach ($classes as $class) {
      if (is_subclass_of($class, '\Drupal\migrate\Tests\MigrateDumpAlterInterface')) {
        $class::migrateDumpAlter($this);
      }
    }

    // Run every migration in the order specified by the storage controller.
    $migrations = Migration::loadMultiple(static::$migrations);
    array_walk($migrations, [$this, 'executeMigration']);

    foreach ($classes as $class) {
      $test_object = new $class($this->testId);
      $test_object->databasePrefix = $this->databasePrefix;
      $test_object->container = $this->container;
      // run() does a lot of setup and tear down work which we don't need:
      // it would setup a new database connection and wouldn't find the
      // Drupal dump. Also by skipping the setUp() methods there are no id
      // mappings or entities prepared. The tests run against solely migrated
      // data.
      foreach (get_class_methods($test_object) as $method) {
        if (strtolower(substr($method, 0, 4)) == 'test') {
          // Insert a fail record. This will be deleted on completion to ensure
          // that testing completed.
          $method_info = new \ReflectionMethod($class, $method);
          $caller = array(
            'file' => $method_info->getFileName(),
            'line' => $method_info->getStartLine(),
            'function' => $class . '->' . $method . '()',
          );
          $completion_check_id = TestBase::insertAssert($this->testId, $class, FALSE, 'The test did not complete due to a fatal error.', 'Completion check', $caller);
          // Run the test method.
          try {
            $test_object->$method();
          }
          catch (\Exception $e) {
            $this->exceptionHandler($e);
          }
          // Remove the completion check record.
          TestBase::deleteAssert($completion_check_id);
        }
      }
      // Add the pass/fail/exception/debug results.
      foreach ($this->results as $key => &$value) {
        $value += $test_object->results[$key];
      }
    }
  }

}
