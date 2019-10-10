<?php
  namespace Massfice\CarTester\Factory;

  use Massfice\CarTester\Car\CarBuilder;
  use Massfice\CarTester\Factory\Parts\Brakes;
  use Massfice\CarTester\Factory\Parts\Engine;
  use Massfice\CarTester\Factory\Parts\Body;
  use Massfice\CarTester\Factory\Tests\Test;
  use Massfice\CarTester\Factory\Testers\Tester;

  class Factory {

    private static function create(string $class) {
      $class = 'Massfice\\CarTester\\Factory\\'.$class;
      return new $class();
    }

    public static function getBuilder() : CarBuilder {
      return new CarBuilder();
    }

    public static function createBrakes(string $class) : Brakes {
      $class = 'Parts\\'.$class;
      return self::create($class);
    }

    public static function createEngine(string $class) : Engine {
      $class = 'Parts\\'.$class;
      return self::create($class);
    }

    public static function createBody(string $class) : Body {
      $class = 'Parts\\'.$class;
      return self::create($class);
    }

    public static function createTest(string $class) : Test {
      $class = 'Tests\\'.$class;
      return self::create($class);
    }

    public static function getTester(string $class) : Tester {
      $class = 'Testers\\'.$class;
      return self::create($class);
    }

  }
?>
