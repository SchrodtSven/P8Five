<?php

declare(strict_types=1);
/**
 * Class using new pip operator |>
 * 
 * @author Sven Schrodt<sven@schrodt.nrw>
 * @link https://github.com/SchrodtSven/P8Five
 * @package P8Five
 * @version 0.1
 * @since 2025-11-24
 */


namespace SchrodtSven\P8Five\New;

class PipeOpUser
{
    public function chainMe(string $txt): string 
    {
        return $txt 
        |> trim(...)
        |> (fn($str) => str_replace(' ', '-', $str))
        |> (fn($str) => str_replace('.', '', $str))
        |> strtolower(...);
    }
}