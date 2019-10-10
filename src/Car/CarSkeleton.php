<?php

  namespace Massfice\CarTester\Car;

  abstract class CarSkeleton {

    //Pola

    protected $brakes;
    protected $engine;
    protected $body;

    //Settery
    public function setBrakes(CarBrakes $brakes) {
      $this->brakes = $brakes;
      return $this;
    }

    public function setEngine(CarEngine $engine) {
      $this->engine = $engine;
      return $this;
    }

    public function setBody(CarBody $body) {
      $this->body = $body;
      return $this;
    }

    //Gettery
    public function getBrakes() : CarBrakes {
      return $this->brakes;
    }

    public function getEngine() : CarEngine {
      return $this->engine;
    }

    public function getBody() : CarBody {
      return $this->body;
    }

  }

?>
