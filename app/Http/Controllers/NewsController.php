<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(string $number)
    {
        return view('newsOne')
            ->with('newsOne', $this->getNewsOne($number))
            ->with('categories', $this->getCategories());
    }
}
