<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $user = Auth::user();

        if ($request->isMethod('post')) {
            $this->validate($request, $this->getValidationRules(), [], $this->getAttributesNames());

            $errors = [];
            if (Hash::check($request->post('password'), $user->password)) {
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = Hash::make($request->post('newPassword'));
                $user->save();
            }
            else {
                $errors['password'][] = 'Неверно введён текущий пароль';
            }

            return redirect()->route('updateProfile')->withErrors($errors);
        }

        return view('admin.profile')
            ->with('user', $user)
            ->with('categories', Categories::all());
    }

    protected function getValidationRules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'password' => 'required',
            'newPassword' => 'required|string|min:8'
        ];
    }

    protected function getAttributesNames(): array
    {
        return [
            'newPassword' => 'Новый пароль'
        ];
    }
}
