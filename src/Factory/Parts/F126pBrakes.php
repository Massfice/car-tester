<?php
  namespace Massfice\CarTester\Factory\Parts;

  class F126pBrakes extends Brakes {

    public function getMass() : float {
      return 15.5;
    }

    public function getName() : string {
      return 'Fiat 126p Brakes';
    }

    public function getCof() : float {
      return 0.33;
    }

  }
?>
