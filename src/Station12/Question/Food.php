<?php

namespace Src\Station12\Question;

use Carbon\CarbonImmutable;

class Food extends Product
{
    public function __construct(int $originalPrice, private CarbonImmutable $useByDate)
    {
        parent::__construct($originalPrice);
    }

    public function price(): int
    {
        $now = CarbonImmutable::now();
        $diffInHours = $now->diffInHours($this->useByDate, false);

        if ($diffInHours < 5) {
          //型キャストして上げる
            return (int) floor($this->originalPrice / 2);
        }
        return $this->originalPrice;
    }
}
