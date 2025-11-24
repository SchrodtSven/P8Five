<?php

declare(strict_types=1);
/**
 * Unit test for ""clone with" feature 
 * 
 * @author Sven Schrodt<sven@schrodt.nrw>
 * @link https://github.com/SchrodtSven/P8Five
 * @package P8Five
 * @version 0.1
 * @since 2025-11-24
 */

use PHPUnit\Framework\TestCase;
use SchrodtSven\P8Five\Color;

final class CloneWithTest  extends TestCase
{
    private Color $col;

    public function setUp(): void
    {
        $this->col = new Color(23, 42, 5);
    }

    public function testBasix(): void
    {
        
        $tmp = $this->col->withAlpha(99);
        
        $this->assertSame(99, $tmp->alpha);
    }


    public static function txtProvider(): array
    {
        return [
            'data set 1' => [' Lorem Ispum Foo ! ', 'lorem-ispum-foo-!'],
            
        ];
    }
}
