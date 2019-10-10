<?php

  namespace Massfice\CarTester\Factory\Tests;

  use Massfice\CarTester\Car\Car;

  //Test zdolności do hamowania.
  /*
    OPIS TESTU:

    Ustawiamy samochód 100 metrów od przeszkody. Rozpędzamy samochód i po 50 metrach zaczynamy hamować.
    Test ma na celu sprawdzenie czy samochód da radę wyhamować i jeśli nie da rady (dobije do przeszkody),
    to czy kierowca ma szansę przeżyć (karoseria działa jak pancerz).

    WZORY:

    a(przyspieszenie) = F(siła) / m(masa)

    sh(droga hamowania) = 50a / (x(wpółczynnik tarcia) * g(9.81))

    Eu(siła uderzenia w przeszkodę, jeśli nastąpiła, w przeciwnym wypadku = 0)
    = (100m(a - 2 pierwiastek(axg) + xg)) / 2

  */
  class BrakingTest extends Test {
    public function makeTest(Car $car) : array {

      $engine = $car->getEngine();
      $brakes = $car->getBrakes();
      $body = $car->getBody();

      $mass = $engine->getMass() + $brakes->getMass() + $body->getMass();

      $a = $engine->getForce() / $mass;

      $x = $brakes->getCof();

      $sh = (50 * $a) / ($x * 9.81);

      $eu = $sh > 50 ? (100 * $mass * ($a - 2 * sqrt($a * $x * 9.81) + $x * 9.81)) / 2 : 0;

      if($eu > 0) $alive = $body->protect($eu);
      else $alive = true;

      return [
        'mass' => $mass,
        'a' => $a,
        'cof' => $x,
        'sh' => $sh,
        'eu' => $eu,
        'alive' => $alive
      ];
    }
  }

?>
