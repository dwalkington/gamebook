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

    switch (true) {
      case $this->value >= 2 && $this->value <= 4: {
        $this->bonus = -1;
        break;
      }
      case $this->value >= 5 && $this->value <= 8: {
        $this->bonus = 0;
        break;
      }
      case $this->value >= 9 && $this->value <= 10: {
        $this->bonus = 1;
        break;
      }
      case $this->value >= 11 && $this->value <= 12: {
        $this->bonus = 2;
        break;
      }
    }
  }

  public function bonus() {
    return $this->bonus;
  }

  public function value() {
    return $this->value;
  }

  public abstract function name();
}
