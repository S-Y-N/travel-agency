<?php

namespace App\Http\Controllers\Admin\Tourist;

use App\Http\Controllers\Controller;
use App\Models\Tourist;

class StoreController extends Controller
{
    public function __invoke(Tourist $tourist)
    {
        // TODO: валідація
        $tourist->save();
    }
}
