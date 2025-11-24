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
use PHPUnit\Framework\Attributes\TestWith;

use SchrodtSven\P8Five\Color;

final class CloneWithTest  extends TestCase
{
    
    #[TestWith([100, 22, 122, 23])]
    #[TestWith([254, 222, 102, 23])]
    public function testBasix(int $r, int $g, int $b, int $a): void
    {
        $tmp = new Color($r ,$g, $b);
        $this->assertSame(Color::ALPHA, $tmp->alpha);
        $this->assertSame($r, $tmp->red);
        $this->assertSame($g, $tmp->green);
        $this->assertSame($b, $tmp->blue);

        $tmp2 = $tmp->withAlpha($a);
        $this->assertSame($a, $tmp2->alpha);
        $this->assertSame($r, $tmp2->red);
        $this->assertSame($g, $tmp2->green);
        $this->assertSame($b, $tmp2->blue);
        
    }

}
