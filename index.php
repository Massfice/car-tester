<?php

  require_once __DIR__.'/vendor/autoload.php';

  use Massfice\CarTester\Factory\Factory;
  use Massfice\CarTester\CarComparison;

  $engine = Factory::createEngine('F126pEngine');
  $brakes = Factory::createBrakes('F126pBrakes');
  $body1 = Factory::createBody('F126pBody');
  $body2 = Factory::createBody('VibraniumBody');

  $car1 = Factory::getBuilder()
    ->setBrakes($brakes)
    ->setBody($body1)
    ->setEngine($engine)
    ->build();

  $car2 = Factory::getBuilder()
    ->setBrakes($brakes)
    ->setBody($body2)
    ->setEngine($engine)
    ->build();

  $test = Factory::createTest('BrakingTest');
  $tester = Factory::getTester('RestrictBrakingTester');

  $result = CarComparison::makeComparison($car1,$car2,$tester,$test);

  if($result['draw']) {
    echo
      '<b>REMIS:</b><br>-----------------<br>'
      .$result['draw'][0]['car'].' (punkty: '.$result['draw'][0]['details']->getPoints().')<br>-----------------<br>'
      .$result['draw'][1]['car'].' (punkty: '.$result['draw'][1]['details']->getPoints().')';

  } else {
    echo
      '<br>-----------------<br><b>Wygrany:</b><br>'.
      $result['winner']['car'].' (punkty: '.$result['winner']['details']->getPoints().
      ')<br>-----------------<br><b>Przegrany:</b><br>'.
      $result['loser']['car'].' (punkty: '.$result['loser']['details']->getPoints().')';
  }

?>
