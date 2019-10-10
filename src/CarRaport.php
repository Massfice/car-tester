<?php

  namespace Massfice\CarTester;

  class CarRaport {

    //$pass: true - samochód przeszedł test, false - nie przeszedł testu
    private $pass;

    //$points - ile punktów zdobył samochód
    private $points;

    //$details - szczegóły testu
    private $details;

    public function __construct(bool $pass, float $points, array $details) {
      $this->pass = $pass;
      $this->points = $points;
      $this->details = $details;
    }

    public function getPass() : bool {
      return $this->pass;
    }

    public function getPoints() : float {
      return $this->points;
    }

    public function getDetails() : array {
      return $this->details;
    }

  }

?>
