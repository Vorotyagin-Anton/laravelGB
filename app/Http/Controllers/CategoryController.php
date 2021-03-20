<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(Categories $category)
    {
        return view('category')
            ->with('news', $this->getCategoryNews($category->id))
            ->with('category', $category)
            ->with('categories', Categories::all());
    }

    public function getCategoryNews(string $categoryId): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return News::query()
            ->join('news_categories', 'news.id', '=', 'news_categories.news_id')
            ->join('categories', 'categories.id', '=', 'news_categories.category_id')
            ->where('categories.id', '=', $categoryId)
            ->select('news.id', 'news.title', 'news.inform')
            ->paginate(5);
    }
}
