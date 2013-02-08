<?php

abstract class Stat {
  private $bonus;
  private $value;



  public function __construct($value = 2) {
    if (!is_int($value)) {
      throw new InvalidArgumentException('Stat value must be a number.');
    }

    if ($value < 2 || $value > 12) {
      throw new RangeException('Stat value must be between 2 and 12.');
    }

    $this->value = $value;
    $this->bonus = $this->getBonus();
  }

  public function bonus() {
    return $this->bonus;
  }

  public function value() {
    return $this->value;
  }

  public abstract function name();



  private function getBonus() {
    $bonus = 0;

    switch ($this->value) {
      case 2:
      case 3:
      case 4:
        $bonus = -1;
        break;
      case 5:
      case 6:
      case 7:
      case 8:
        $bonus = 0;
        break;
      case 9:
      case 10:
        $bonus = 1;
        break;
      case 11:
      case 12:
        $bonus = 2;
        break;
    }

    return $bonus;
  }
}
