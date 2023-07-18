<?php

namespace App\Http\Controllers\Admin\Sale;

use App\Http\Controllers\Controller;
use App\Models\Sale;

class StoreController extends Controller
{
    public function __invoke(Sale $sale)
    {
        // TODO: валідація
        $sale->save();
    }
}
