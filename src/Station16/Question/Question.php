<?php

namespace Src\Station16\Question;

class Question
{
    public function main(string $humanName, string $carName, int $passengers): void
    {
      $human = new Human($humanName);
      $car = new Car($carName);

      $human->buyCar($car);
      $car->run();
      //これだけ echoで出力する.. intだから..
      echo $car->pickup($passengers);
    }
}

