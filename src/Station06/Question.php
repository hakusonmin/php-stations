<?php

namespace Src\Station06;

class Question
{
  public function main(): array
  {
    $colors = ['red', 'blue', 'yellow'];

    array_splice($colors, 0, 0, 'white');

    array_splice($colors, 1, 0, 'black');

    array_splice($colors, 4, 1);

    array_splice($colors, 3, 0, 'green');

    return $colors;
  }
}
