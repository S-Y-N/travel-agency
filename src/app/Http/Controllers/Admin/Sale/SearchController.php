<?php

namespace App\Http\Controllers\Admin\Sale;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function __invoke(
        string $first_name,
        string $middle_name,
        string $last_name,
        string $phone_num,
        int $sale_id,
        int $employee_id)
    {
        // Створюємо запит до таблиці sales, під'єднуємо таблицю tourists
        $query = DB::table('sales')
            ->join('tourists', 'sales.id', '=', 'tourists.id');

        // Якщо вказано ім'я туриста - фільтруємо по ньому
        if (isset($first_name))
            $query = $query->where('tourists.first_name', 'like', '%' + $first_name + '%');

        // Якщо вказано друге ім'я туриста - фільтруємо по ньому
        if (isset($middle_name))
            $query = $query->where('tourists.middle_name', 'like', '%' + $middle_name + '%');

        // Якщо вказано фамілію туриста - фільтруємо по ній
        if (isset($last_name))
            $query = $query->where('tourists.last_name', 'like', '%' + $last_name + '%');

        // Якщо вказано номер телефону туриста - фільтруємо по ньому
        if (isset($phone_num)) {
            // TODO
        }

        // Якщо вказано ідентифікатор заявки - фільтруємо по ньому
        if (isset($sale_id))
            $query = $query->where('id', '=', $sale_id);

        // Якщо вказано ідентифікатор працівника - фільтруємо по ньому
        if (isset($employee_id))
            $query = $query->where('employee_id', '=', $employee_id);

        // Повертаємо список знайдених заявок
        // TODO: Уточнити список повернутих полів
        return $query->get();
    }
}
