<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Exceptions\RouteNotFoundException;
use App\Route;
use PHPUnit\Framework\TestCase;

final class RouterTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = new Route();
    }


    /** @test */
    public function route_can_be_registered(): void
    {
        $this->obj->register('get', 'Users', ['index', 'store']);

        $expected = [
            'get' => [
                'Users' => ['index', 'store']
            ]
        ];

        $this->assertEquals($expected, $this->obj->routes());
    }

    /** @test */
    public function get_is_working(): void
    {
        $this->obj->get('Users', ['index', 'store']);

        $expected = [
            'get' => [
                'Users' => ['index', 'store']
            ]
        ];

        $this->assertEquals($expected, $this->obj->routes());
    }

    /** @test */
    public function post_is_working(): void
    {
        $this->obj->post('Users', ['index', 'store']);

        $expected = [
            'post' => [
                'Users' => ['index', 'store']
            ]
        ];

        $this->assertEquals($expected, $this->obj->routes());
    }

    /** @test */
    public function when_route_created_routes_are_empty()
    {
        $this->assertEmpty($this->obj->routes());
    }

    /** @test 
     *  @dataProvider Tests\Provider\RouterDataProvider::routeNotFoundCases
     */
    public function route_throw_exception(
        string $requestUri,
        string $requestMethod,
    ): void {

        $userObj = new class
        {
            public function delete()
            {
                return true;
            }
        };

        $this->obj->get('Users', [$userObj::class, 'store']);
        $this->obj->post('Users', ['index', 'store']);

        $this->expectException(RouteNotFoundException::class);
        $this->obj->resolve($requestUri, $requestMethod);
    }

    /** @test */
    public function it_resolves_route_from_a_closure(): void
    {
        $this->obj->get('/users', fn() => [1, 2, 3]);

        $this->assertEquals([1, 2, 3], $this->obj->resolve('/users', 'get'));
    }
}
