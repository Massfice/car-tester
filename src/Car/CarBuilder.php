<?php

  namespace Massfice\CarTester\Car;

  class CarBuilder extends CarSkeleton {
    public function build() : Car {
      return new Car($this);
    }
  }
?>
