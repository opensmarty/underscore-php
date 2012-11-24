<?php
abstract class UnderscoreWrapper extends PHPUnit_Framework_TestCase
{
  public $array = array('foo' => 'bar', 'bis' => 'ter');
  public $arrayNumbers = array(1, 2, 3);
  public $arrayMulti = array(
    array('foo' => 'bar', 'bis' => 'ter'),
    array('foo' => 'bar', 'bis' => 'ter'),
    array('bar' => 'foo', 'bis' => 'ter'),
  );

  /**
   * Starts the bundle
   */
  public static function setUpBeforeClass()
  {
    // If we're inside Laravel, autoload Underscore
    if (class_exists('Bundle')) {
      Bundle::start('underscore');
    }
  }

  public function setUp()
  {
    // Create some dummy data
    $this->object = (object) $this->array;
    $this->objectMulti = (object) array(
      (object) $this->arrayMulti[0],
      (object) $this->arrayMulti[1],
      (object) $this->arrayMulti[2],
    );
  }
}
