<?php

namespace Src\Station12\Practice;

require_once('vendor/autoload.php');

class Practice
{
  public function main(): void
  {
    $bird = new Bird('parrot');
    $bird->fly();
    echo $bird->type;
  }
}

(new Practice())->main();
