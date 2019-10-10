<?php

  namespace Massfice\CarTester\Car;

  class Car extends CarSkeleton {

    public function __construct(CarBuilder $builder) {
      $this->setBrakes($builder->getBrakes());
      $this->setEngine($builder->getEngine());
      $this->setBody($builder->getBody());
    }

    public function __toString() {
      return
        '<b>Brakes:</b> '.$this->brakes->getName().' | '.
        '<b>Engine:</b> '.$this->engine->getName().' | '.
        '<b>Body:</b> '.$this->body->getName();
    }
  }
?>
