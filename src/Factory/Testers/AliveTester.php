<?php
  namespace Massfice\CarTester\Factory\Testers;

  use Massfice\CarTester\CarTest;
  use Massfice\CarTester\CarRaport;
  use Massfice\CarTester\Car\Car;

  class AliveTester extends Tester {
    public function analyze(Car $car, CarTest $test) : CarRaport {

      $details = $test->makeTest($car);

      $points = isset($details['alive']) && $details['alive'] ? 100 : 0; // punkty za żywego kierowcę

      $pass = $points == 100; //tester ten zalicza test, jeżeli kierowca przeżyje

      return new CarRaport($pass,$points,$details);

    }
  }
?>
