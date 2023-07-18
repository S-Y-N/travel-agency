<?php

namespace App\Http\Controllers\Admin\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;

class EditController extends Controller
{
    public function __invoke()
    {
        $company = Company::find(1);
        return view('company.edit', compact('company'));
    }
}
