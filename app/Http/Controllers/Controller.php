<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getCategories(): \Illuminate\Support\Collection
    {
        return DB::table('categories')->get();
    }

    public function getCategoryOne(string $categoryId)
    {
        return DB::table('categories')->find($categoryId);
    }

    public function getNews(): \Illuminate\Support\Collection
    {
        return DB::table('news')->get();
    }

    public function getCategoryNews(string $categoryId): \Illuminate\Support\Collection
    {
        return DB::table('news')
            ->join('news_categories', 'news.id', '=', 'news_categories.news_id')
            ->join('categories', 'categories.id', '=', 'news_categories.category_id')
            ->where('categories.id', '=', $categoryId)
            ->select('news.id', 'news.title', 'news.inform')
            ->get();
    }

    public function getNewsOne(string $newsId)
    {
        return DB::table('news')->find($newsId);
    }
}
