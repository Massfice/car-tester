<?php

  namespace Massfice\CarTester;

  use Massfice\CarTester\Car\Car;

  /**
   *  Car Tester - osoba poddająca samochód testowi, a następnie oceniająca wyniki testu.
   *  Tester orzeka czy samochód przeszedł test, czy nie, a także przydziela punkty za poszczególne dane raportu.
   */
  interface CarTester
  {
    public function analyze(Car $car, CarTest $test) : CarRaport;
  }


?>
