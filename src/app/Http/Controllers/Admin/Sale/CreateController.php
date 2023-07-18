<?php

namespace App\Http\Controllers\Admin\Sale;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Models\Employee;

class CreateController extends Controller
{
    public function __invoke()
    {
        $tours = Tour::all();
        $employees = Employee::all();
        return view('tour.create', compact('tours', 'employees'));
    }
}
