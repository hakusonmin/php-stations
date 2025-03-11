<?php

namespace Src\Station14\Question;

use Src\Station13\Question\Vehicle;

class Car extends Vehicle
{
    public const DOOR = 5;
    private static int $passenger = 0; 

    public static function getPassenger(): void
    {
        echo self::$passenger;
    }

    public static function pickup(): void
    {
        self::$passenger++;
        self::getPassenger();
    }

    public static function getDoors(): void
    {
        echo self::DOOR;
    }
}