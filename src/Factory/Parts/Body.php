<?php
  namespace Massfice\CarTester\Factory\Parts;

  use Massfice\CarTester\Car\CarBody;

  abstract class Body implements CarBody {
    public abstract function getMass() : float;
    public abstract function getName() : string;
    public abstract function protect(float $force) : bool;
  }
?>
