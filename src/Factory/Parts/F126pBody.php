<?php
  namespace Massfice\CarTester\Factory\Parts;

  class F126pBody extends Body {

    public function getMass() : float {
      return 750;
    }

    public function getName() : string {
      return 'Fiat 126p Body';
    }

    public function protect(float $force) : bool {

      $resistance = 3500;

      $procent = ceil(($resistance / ($resistance + $force)) * 100);

      $i = rand(0,100);

      echo $i;

      return $i <= $procent;
    }
  }
?>
