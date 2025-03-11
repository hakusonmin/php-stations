<?php

namespace Src\Station16\Question;

class Human
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function buyCar(Car $car): void
    {
        echo "{$this->name}は{$car->getName()}を購入しました";
    }
}