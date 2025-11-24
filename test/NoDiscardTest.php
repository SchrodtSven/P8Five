<?php

declare(strict_types=1);
/**
 * Unit test for new Pipe operator |>
 * 
 * - using/removing own err_handler, due to:
 * @see https://github.com/sebastianbergmann/phpunit/issues/5062 
 * 
 * @author Sven Schrodt<sven@schrodt.nrw>
 * @link https://github.com/SchrodtSven/P8Five
 * @package P8Five
 * @version 0.1
 * @since 2025-11-24
 */

use PhpParser\Node\Expr\BinaryOp\Pipe;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\TestWith;
use Uri\Rfc3986\Uri;
use SchrodtSven\P8Five\New\NoDiscarder;

final class NoDiscardTest  extends TestCase
{
    private NoDiscarder $user;

    public function setUp(): void
    {
        $this->user = new NoDiscarder();
        set_error_handler(static function (int $no, string $msg): never {
            throw new Exception($msg, $no);
        }, E_USER_WARNING);
    }

    public function tearDown(): void
    {
        restore_error_handler();
    }

    public function testBasix(): void
    {
        
        $this->expectException(\Exception::class);
        $this->user->getVersion();
        
        
    
    }


    
}
