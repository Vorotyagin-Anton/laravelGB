<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function getDataForm(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('getDataForm')
                ->with('categories', $this->getCategories());
        }

        if ($request->isMethod('post')) {
            file_put_contents('test.txt', json_encode($request->all()), FILE_APPEND);
            return redirect()->route('getDataForm')->withInput();
        }
    }
}
