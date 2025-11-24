<?php

declare(strict_types=1);
/**
 * Class for demonstrating "clone with" funtionality on readonly classes in unit tests
 * 
 * @author Sven Schrodt<sven@schrodt.nrw>
 * @link https://github.com/SchrodtSven/P8Five
 * @package P8Five
 * @version 0.1
 * @since 2025-11-24
 */


namespace SchrodtSven\P8Five;

readonly class Color
{
    public const int ALPHA = 255;

    public function __construct(
        public int $red,
        public int $green,
        public int $blue,
        public int $alpha = self::ALPHA,
    ) {}

    public function withAlpha(int $alpha): self
    {
        return clone($this, [
            'alpha' => $alpha,
        ]);
    }
}
