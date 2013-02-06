<?php

class Character {
  
  private $name;

  public function setName($name) {
      $this->name = $name;
  }

  public function getName() {
    return $this->name;
  }

  public function getStrength(){
    return 0;
  }
}
