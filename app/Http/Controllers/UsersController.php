<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\CreateUserRequest;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function signUp(CreateUserRequest $createUserRequest)
    {
        return;
    }
}
