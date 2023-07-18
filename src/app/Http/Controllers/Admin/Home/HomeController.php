<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home.index');
    }
}
