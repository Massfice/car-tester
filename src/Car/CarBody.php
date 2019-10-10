<?php

  namespace Massfice\CarTester\Car;
  /**
   * Karoseria
   */
  interface CarBody extends CarPart
  {
    //Dobra karoseria potrafi ocalić życie kierowcy. Działa jak pancerz.
    //Funkcja dostaje w parametrze siłę działającą na samochów i zwraca true, jeśli kierowca przeżył i false
    //jeśli umarł.
    public function protect(float $force) : bool;
  }

?>
