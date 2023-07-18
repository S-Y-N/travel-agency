<?php

namespace App\Http\Controllers\Admin\Tourist;

use App\Http\Controllers\Controller;
use App\Models\TouristTag;

class CreateController extends Controller
{
    public function __invoke()
    {
        $tags = TouristTag::all();
        return view('tourist.create', compact('tags'));
    }
}
