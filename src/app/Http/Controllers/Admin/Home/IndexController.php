<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('admin_home.index');
    }
}
