<?php 

require_once "PHPUnit/Autoload.php";
require_once "../src/Character.php";

class CharacterTest extends PHPUnit_Framework_TestCase
{
  public function testShouldInitializeWithAName() {
    $char = new Character();
    $char->setName('Scott Tiger');

    $this->assertEquals('Scott Tiger', $char->getName());
  }
}

