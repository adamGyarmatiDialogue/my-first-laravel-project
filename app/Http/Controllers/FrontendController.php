<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function signUp()
    {
        return view("pages.frontend.sign-up");
    }

    public function signIn()
    {
        return view("pages.frontend.sign-in");
    }
}
