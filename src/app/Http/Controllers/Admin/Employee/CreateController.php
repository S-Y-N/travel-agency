<?php

namespace App\Http\Controllers\Admin\Employee;

use App\Http\Controllers\Controller;
use App\Models\EmployeeRole;

class CreateController extends Controller
{
    public function __invoke()
    {
        dd('test');
        $roles = EmployeeRole::all();
        return view('employee.create', compact('roles'));
    }
}
