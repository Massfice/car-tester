<?php
  namespace Massfice\CarTester\Factory\Testers;

  use Massfice\CarTester\CarTest;
  use Massfice\CarTester\CarRaport;
  use Massfice\CarTester\Car\Car;
  use Massfice\CarTester\Factory\Tests\BrakingTest;

  class RestrictBrakingTester extends Tester {
    public function analyze(Car $car, CarTest $test) : CarRaport {

      if(!$test instanceof BrakingTest)
        return new CarRaport(false,0,[]);

      $details = $test->makeTest($car);

      $points = $details['alive'] ? 50 : 0; // punkty za żywego kierowcę

      $i = (50 - $details['sh']) * 0.5; //punkty za krótką drogę hamowania
      $i = $i < 0 ? 0 : $i;

      $points = $points + $i;

      $pass = $points > 50; //więcej niż 50 punktów do zdania testu, czyli droga hamowania <= 50 i kierowca żywy

      return new CarRaport($pass,$points,$details);

    }
  }
?>
