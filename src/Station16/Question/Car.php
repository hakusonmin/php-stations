<?php

namespace Src\Station16\Question;

class Car
{
    private string $name = '';
    private int $passenger = 0;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function run():  void
    {
        echo "走行する";
    }

    public function pickup(int $count): int
    {
        $this->passenger += $count;
        return $this->passenger;
    }

    public function getName(): string
    {
        return $this->name;
    }
}