<?php

namespace Tests\Feature\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Tests\TestCase;

class UsersControllerTest extends TestCase
{
    public function testCreateUserNoData(): void
    {
        $response = $this
            ->json("POST", "/api/v1/users", [], []);

        $response
            ->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    // public function testCreateUserGoodData(): void
    // {
    //     $response = $this
    //         ->json("POST", "/api/v1/users", [
    //             "firstName" => "asdf",
    //             "lastName" => "asdf",
    //             "username" => "asdf",
    //             "email" => "asdf-asdf@example.com",
    //             "password" => "asdf-asdf",
    //             "reTypedPassword" => "asdf-sadf",
    //         ], []);

    //     $response
    //         ->assertStatus(Response::HTTP_CREATED);
    // }
}
