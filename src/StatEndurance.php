<?php

class StatEndurance extends Stat {
  const NAME = 'Endurance';

  public function name() {
    return self::NAME;
  }

  public function value() {
    return 20;
  }
}
