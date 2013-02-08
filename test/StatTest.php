<?php 

require_once "PHPUnit/Autoload.php";

require_once "../src/Stat.php";
require_once "../src/StatStrength.php";
require_once "../src/StatAgility.php";
require_once "../src/StatIntelligence.php";
require_once "../src/StatEndurance.php";

class StatTest extends PHPUnit_Framework_TestCase
{
  public function testStatsShouldHaveNames() {
    $st = new StatStrength();
    $ag = new StatAgility();
    $in = new StatIntelligence();
    $en = new StatEndurance();

    $this->assertEquals($st->name(), 'Strength');
    $this->assertEquals($ag->name(), 'Agility');
    $this->assertEquals($in->name(), 'Intelligence');
    $this->assertEquals($en->name(), 'Endurance');
  }

  public function testShouldHaveDefaultValues() {
    $stat = new StatStrength();

    $this->assertEquals($stat->value(), 2);
  }

  public function testConstructorShouldSetValue() {
    $stat = new StatStrength(2);

    $this->assertEquals($stat->value(), 2);
  }

  /**
   * @expectedException InvalidArgumentException
  */
  public function testConstructorShouldOnlyAcceptNumbers() {
    $stat = new StatStrength('a');
  }

  /**
   * @expectedException RangeException
  */
  public function testConstructorShouldNotAcceptNumbersLowerThan2() {
    $stat = new StatStrength(1);
  }

  /**
   * @expectedException RangeException
  */
  public function testConstructorShouldNotAcceptNumbersGreaterThan12() {
    $stat = new StatStrength(13);
  }

  public function testBonusShouldBeMinus1WhenValueIsBetween2And4() {
    $stat = new StatStrength(2);
    $this->assertEquals($stat->bonus(), -1);

    $stat = new StatStrength(4);
    $this->assertEquals($stat->bonus(), -1);
  }

  public function testBonusShouldBe0WhenValueIsBetween5And8() {
    $stat = new StatStrength(5);
    $this->assertEquals($stat->bonus(), 0);

    $stat = new StatStrength(8);
    $this->assertEquals($stat->bonus(), 0);
  }

  public function testBonusShouldBe1WhenValueIsBetween9And10() {
    $stat = new StatStrength(9);
    $this->assertEquals($stat->bonus(), 1);

    $stat = new StatStrength(10);
    $this->assertEquals($stat->bonus(), 1);
  }

  public function testBonusShouldBe2WhenValueIsBetween11And12() {
    $stat = new StatStrength(11);
    $this->assertEquals($stat->bonus(), 2);

    $stat = new StatStrength(12);
    $this->assertEquals($stat->bonus(), 2);
  }
}
