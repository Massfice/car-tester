<?php

  namespace Massfice\CarTester\Car;
  /**
   * Hamulce samochodu.
   */
  interface CarBrakes extends CarPart
  {
    //Cof = Coefficient of friction - wpółczynnik tarcia, lepsze hamulce, lepsze tarcie, krótsza droga hamowania
    public function getCof() : float;
  }

?>
