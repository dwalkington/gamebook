<?php 

require_once "PHPUnit/Autoload.php";

require_once "../src/Stat.php";
require_once "../src/StatStrength.php";
require_once "../src/StatAgility.php";
require_once "../src/StatIntelligence.php";
require_once "../src/StatEndurance.php";

class StatTest extends PHPUnit_Framework_TestCase
{
  public function testShouldHaveDefaultValuesForProperties() {
    $stat = new StatStrength();

    $this->assertEquals($stat->bonus(), 0);
    $this->assertEquals($stat->value(), 0);
  }

  public function testShouldBeAbleToSetValue() {
    $stat = new StatStrength(1);

    $this->assertEquals($stat->value(), 1); 
  }

  // public function testShouldBeAbleToSetBonus() {
  //   $stat = new StatStrength();

  //   $this->assertEquals($stat->bonus(), 1);
  // }

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
}
