<?php
class Fruit {
  public $name;
  protected $color;
  private $weight;

  // setter
  public function setParams($param, $value){
    $this->$param = $value;
  }

  // getter
  public function getParams(){
    return $this->name .  ' - Color: ' . $this->color . ' - Peso: ' . $this->weight;
  }
}