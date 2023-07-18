<?php

namespace App\Http\Controllers\Admin\Tourist;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function __invoke(string $searchQuery, int $status_id, array $tags)
    {
        $query = DB::table('tourists');

        // Якщо вказаний текстовий критерій пошуку - фільтруємо по імені, номеру телефона або пошті
        if (isset($searchQuery)) {
            // Отримуємо список туристів по номеру телефона
            $phoneTouristIds = DB::table('tourist_phones_tourists')
                ->join('tourist_phones', 'phone_num', '=', $searchQuery)
                ->get('tourist_id');

            // Отримуємо список туристів по імені, номеру телефона або пошті
            $query = $query
                ->where('name', 'like', '%' + $searchQuery + '%')
                ->orWhereIn('id', $phoneTouristIds)
                ->orWhere('email', 'like', '%' + $searchQuery + '%');
        }

        // Якщо вказаний статус заявки - фільтруємо по ньому
        if (isset($status_id)) {
            // TODO
        }

        // Якщо вказаний перелік міток туриста - фільтруємо по ньому
        if (isset($tags) && count($tags) > 0) {
            // Отримуємо список ідентифікаторів міток
            $tagIds = array_map(function($entry) { return $entry->id; }, $tags);

            // Отримуємо список туристів, у яких є обрані мітки
            $touristIds = DB::table('tourist_tags_tourists')
                ->whereIn('tag_id', $tagIds)
                ->get('tourist_id');

            // Отримуємо інформацію по туристам по ідентифікаторам
            $query = $query->whereIn('id', $touristIds);
        }

        // Повертаємо список знайдених туристів
        // TODO: Уточнити список повернутих полів
        return $query->get();
    }
}
