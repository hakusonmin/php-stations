<?php

namespace Src\Station15\Question;

class Question
{
    public function main($multiplieds, $multiplier): array
    {
      $calculator = new Calculator();

      return $calculator->multiply($multiplieds, $multiplier);
    }
}

