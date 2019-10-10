<?php
  namespace Massfice\CarTester\Factory\Tests;

  use Massfice\CarTester\CarTest;
  use Massfice\CarTester\Car\Car;

  abstract class Test implements CarTest {
    public abstract function makeTest(Car $car) : array;
  }
?>
