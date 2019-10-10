<?php
  namespace Massfice\CarTester;

  use Massfice\CarTester\Car\Car;

  interface CarTest {
    //Samochodowe testy - bierzemy samochód, poddajemy go testowi, w odpowiedzi dostajemy tablicę z danymi
    public function makeTest(Car $car) : array;
  }
?>
