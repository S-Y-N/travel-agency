<?php

namespace App\Http\Controllers\Admin\Sale;

use App\Http\Controllers\Controller;
use App\Models\Tour;

class CreateController extends Controller
{
    public function __invoke()
    {
        $tours = Tour::all();
        return view('sale.create', compact('tours'));
    }
}
