<?php

declare(strict_types=1);
/**
 * Unit test for new Pipe operator |>
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
use SchrodtSven\P8Five\New\PipeOpUser;

final class PipeOpTest  extends TestCase
{
    private PipeOpUser $user;

    public function setUp(): void
    {
        $this->user = new PipeOpUser();
    }

    #[DataProvider('txtProvider')]
    public function testBasix(string $raw, string $piped): void
    {
        $this->assertSame($piped, $this->user->chainMe($raw));
    }


    public static function txtProvider(): array
    {
        return [
            'data set 1' => [' Lorem Ispum Foo ! ', 'lorem-ispum-foo-!'],
            
        ];
    }
}
