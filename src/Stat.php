<?php

abstract class Stat {
  private $bonus;
  private $value;

  public function __construct($value = 0) {
    $this->value = $value;
    $this->bonus = 0;
  }

  public function bonus() {
    return $this->bonus;
  }

  public function value() {
    return $this->value;
  }

  public abstract function name();
}
