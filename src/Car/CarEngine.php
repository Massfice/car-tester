<?php

  namespace Massfice\CarTester\Car;
  /**
   * Silnik samochodu.
   */
  interface CarEngine extends CarPart
  {
    //Force - "siła silnika" (w niutonach)
    public function getForce() : float;
  }

?>
