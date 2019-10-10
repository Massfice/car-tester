<?php
  namespace Massfice\CarTester\Factory\Parts;

  use Massfice\CarTester\Car\CarEngine;

  abstract class Engine implements CarEngine {
    public abstract function getMass() : float;
    public abstract function getName() : string;
    public abstract function getForce() : float;
  }
?>
