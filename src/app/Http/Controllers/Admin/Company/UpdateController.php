<?php

namespace App\Http\Controllers\Admin\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;

class UpdateController extends Controller
{
    public function __invoke(Company $company)
    {
        // TODO: валідація
        $company->update();
    }
}
