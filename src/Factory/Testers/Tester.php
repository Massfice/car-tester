<?php
  namespace Massfice\CarTester\Factory\Testers;

  use Massfice\CarTester\CarTester;
  use Massfice\CarTester\CarTest;
  use Massfice\CarTester\CarRaport;
  use Massfice\CarTester\Car\Car;

  abstract class Tester implements CarTester {
    public abstract function analyze(Car $car, CarTest $test) : CarRaport;
  }
?>
