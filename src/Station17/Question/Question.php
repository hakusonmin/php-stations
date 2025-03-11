<?php

namespace Src\Station17\Question;

class Question
{
    public function main(): void
    {
      $keyboard = new Keyboard();
      $piano = new PianoSound();
      $guitar = new GuitarSound();

      $keyboard->play($piano, "ド"); 
      $keyboard->play($guitar, "C");
    }
}
