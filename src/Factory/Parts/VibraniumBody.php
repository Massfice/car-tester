<?php
  namespace Massfice\CarTester\Factory\Parts;

  class VibraniumBody extends Body {

    public function getMass() : float {
      return 422.52;
    }

    public function getName() : string {
      return 'Vibranium "You will never die" Body';
    }

    public function protect(float $force) : bool {
      return true;
    }

  }
?>
