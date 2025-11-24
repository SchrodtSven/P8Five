<?php

declare(strict_types=1);
/**
 * Class using NoDiscard Attribute 
 * 
 * @author Sven Schrodt<sven@schrodt.nrw>
 * @link https://github.com/SchrodtSven/P8Five
 * @package P8Five
 * @version 0.1
 * @since 2025-11-24
 */


namespace SchrodtSven\P8Five\New;

class NoDiscarder
{
    #[\NoDiscard]
    function getVersion(): string
    {
        return phpversion();
    }

}