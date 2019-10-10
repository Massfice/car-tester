<?php
  namespace Massfice\CarTester\Factory\Parts;

  class F126pEngine extends Engine {

    public function getMass() : float {
      return 75.5;
    }

    public function getName() : string {
      return 'Fiat 126p Engine';
    }

    public function getForce() : float {
      return 1250; //1650 max
    }

  }
?>
