<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(string $number)
    {
        return view('category')
            ->with('news', $this->getCategoryNews($number - 1))
            ->with('category', $this->getCategories()[$number - 1])
            ->with('categories', $this->getCategories());
    }
}
