<?php

namespace App\Http\Controllers\Admin\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee;

class StoreController extends Controller
{
    public function __invoke(Employee $employee)
    {
        // TODO: валідація
        $employee->save();
    }
}
