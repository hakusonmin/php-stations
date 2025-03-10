<?php

namespace Src\Station02;

class Question
{
  public function main(mixed $arg): string
  {
    if ($arg === 0) {
      return 'zero';
    }

    if ($arg === 1) {
      return 'bar';
    }

    if ($arg === 2 || $arg === 3) {
      return 'baz';
    }

    if ($arg === '1') {
      return 'foo';
    }

    if ($arg === '2') {
      return 'baz';
    }

    return 'others';
  }
}
