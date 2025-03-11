<?php

namespace Src\Station08;

class Question
{
  public function main(): array
  {
    $array = [
      ['アザラシ', 'アライグマ'],
      ['ウサギ', 'ウシ', 'ウマ'],
      ['オオカミ', 'オットセイ'],
    ];
    array_pop($array);

    array_splice($array, 1, 1);

    array_splice($array, 1, 0, [['イヌ', 'イルカ']]);

    array_push($array, ['ウサギ', 'ウシ', 'ウマ']);

    return $array;
  }
}
