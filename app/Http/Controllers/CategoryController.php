<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(string $number)
    {
        return view('category')
            ->with('news', $this->getCategoryNews($number))
            ->with('category', $this->getCategoryOne($number))
            ->with('categories', $this->getCategories());
    }
}
