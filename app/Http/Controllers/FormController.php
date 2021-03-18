<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\QueryDataForm;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function getDataForm(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('getDataForm')
                ->with('categories', Categories::all());
        }

        if ($request->isMethod('post')) {
            $queryDataFormTable = new QueryDataForm;
            $queryDataFormTable->customer_name = $request->name;
            $queryDataFormTable->customer_phone = $request->phone;
            $queryDataFormTable->customer_email = $request->email;
            $queryDataFormTable->requested_text = $request->info;
            $queryDataFormTable->save();
            return redirect()->route('getDataForm')->withInput();
        }
    }
}
