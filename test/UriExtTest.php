<?php

declare(strict_types=1);
/**
 * Unit test for new Uri extension
 * 
 * @author Sven Schrodt<sven@schrodt.nrw>
 * @link https://github.com/SchrodtSven/P8Five
 * @package P8Five
 * @version 0.1
 * @since 2025-11-24
 */

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\TestWith;
use Uri\Rfc3986\Uri;
use SchrodtSven\P8Five\New\Useless;

final class UriExtTest  extends TestCase
{

    public function setUp(): void
    {
        $foo = new Useless();
    }

    #[DataProvider('uriProvider')]
    public function testBasix(?string $uri, ?string $user, ?string $pass, ?string $path, ?int $port, ?string $fragment, ?string $scheme, ?string $query, ?string $host): void
    {
        $uriObject = new Uri($uri);
        $this->assertSame($port, $uriObject->getPort());
        $this->assertSame($scheme, $uriObject->getScheme());
        $this->assertSame($path, $uriObject->getPath());
        $this->assertSame($user, $uriObject->getUsername());
        $this->assertSame($pass, $uriObject->getPassword());
        $this->assertSame($fragment, $uriObject->getFragment());
        $this->assertSame($query, $uriObject->getQuery());
        $this->assertSame($host, $uriObject->getHost());
    }


    public static function uriProvider(): array
    {
        return [
            'data set 1' => ['https://admin:Foo@example.org:2342/content/Blog/main/?q=Vbar#Footer', 'admin', 'Foo', '/content/Blog/main/', 2342, 'Footer', 'https', 'q=Vbar', 'example.org'],
            'data set 2' => ['https://bar.www.example:8088/static/1234', null, null, '/static/1234', 8088, null, 'https', null, 'bar.www.example'],
            'data set 3' => ['ssh://me@jumpbox.invalid','me', '', '',null,  null, 'ssh', null, 'jumpbox.invalid'],
        ];
    }
}
