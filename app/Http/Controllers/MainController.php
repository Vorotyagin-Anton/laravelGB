<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('main')
            ->with('categories', Categories::all());
    }
}
