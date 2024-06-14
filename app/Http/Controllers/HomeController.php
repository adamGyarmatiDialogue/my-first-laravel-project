<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        // Session::flash("admin", "user");
        $user = Session::has("user");
        $admin = Session::has("admin");
        $layout = 'pages.frontend.homepage';

        if ($user) {
            $layout = 'layouts.backend.layout';
        }

        if ($admin) {
            $layout = 'layouts.admin.layout';
        }

        return view($layout);
    }
}
