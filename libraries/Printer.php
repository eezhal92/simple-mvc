<?php

class Printer
{

  private $brand;

  public function __construct($brand = "No Brand")
  {
      $this->brand = $brand;
  }

  public function brand()
  {
      return $this->brand;
  }

}
