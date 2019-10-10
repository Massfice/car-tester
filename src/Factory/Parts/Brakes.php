<?php
  namespace Massfice\CarTester\Factory\Parts;

  use Massfice\CarTester\Car\CarBrakes;

  abstract class Brakes implements CarBrakes {
    public abstract function getMass() : float;
    public abstract function getName() : string;
    public abstract function getCof() : float;
  }
?>
