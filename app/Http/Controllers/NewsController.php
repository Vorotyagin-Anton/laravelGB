<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(News $news)
    {
        return view('newsOne')
            ->with('newsOne', $news)
            ->with('categories', Categories::all());
    }
}
