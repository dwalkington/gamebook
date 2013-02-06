<?php 

require_once "PHPUnit/Autoload.php";
require_once "../src/character.php";

class CharacterTest extends PHPUnit_Framework_TestCase
{
  public function testShouldInitializeWithAName() {
    $char = new Character();
    $char->setName('Scott Tiger');

    $this->assertEquals('Scott Tiger', $char->getName());
  }

  public function testIfCharacterStrengthIsInteger() {
    $char = new Character();
    $this->assertEquals(true, is_int($char->getStrength()));
  }
}

?>
