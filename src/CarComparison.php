<?php

  namespace Massfice\CarTester;

  use Massfice\CarTester\Car\Car;
  use Massfice\CarTester\CarRaport;

  class CarComparison {

    private static function result(array & $result, Car $car, CarRaport $raport, string $key) {
      if($key == 'draw') {
        $buff['car'] = $car;
        $buff['details'] = $raport;
        $result[$key][] = $buff;
      } else {
        $result[$key]['car'] = $car;
        $result[$key]['details'] = $raport;
      }
    }

    public static function makeComparison(Car $car1, Car $car2, CarTester $tester, CarTest $test) : array {
      $result1 = $tester->analyze($car1,$test);
      $result2 = $tester->analyze($car2,$test);

      $r = [];

      if($result1->getPoints() > $result2->getPoints()) {
        self::result($r,$car1,$result1,'winner');
        self::result($r,$car2,$result2,'loser');
        $r['draw'] = false;
      } else if($result1->getPoints() < $result2->getPoints()) {
        self::result($r,$car1,$result1,'loser');
        self::result($r,$car2,$result2,'winner');
        $r['draw'] = false;
      } else if($result1->getPoints() == $result2->getPoints()) {
        self::result($r,$car1,$result1,'draw');
        self::result($r,$car2,$result2,'draw'); //draw = remis
      }

      return $r;
    }
  }

?>
