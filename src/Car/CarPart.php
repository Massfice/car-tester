<?php

  namespace Massfice\CarTester\Car;

  /**
   * Część samochodowa - interfejs ogólny.
   */
  interface CarPart
  {
    //Mass - masa, waga, wpływa na ogólną masę pojazdu
    public function getMass() : float;

    public function getName() : string;
  }


?>
