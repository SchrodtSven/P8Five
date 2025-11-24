<?php

class Rnd
{
    private array $actLst = [];

    public function __construct(private int $cntr = 0)
    {
        $this->actLst = file("dta/wordz.txt");
    }

    public function drop(): mixed
    {
        if ($this->cntr % 2 == 0) {
            $s = array_pop($this->actLst);
        } else {
            $s = array_shift($this->actLst);
        }
        $this->cntr++;
        shuffle($this->actLst);
        return trim($s);
    }

}
