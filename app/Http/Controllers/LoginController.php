<?php

namespace App\Http\Controllers;

use App\Http\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Socialite;

class LoginController extends Controller
{
    public function loginVK()
    {
        session()->get('soc.token');
        if (Auth::id()) {
            return redirect()->route('index');
        }

        return Socialite::with('vkontakte')->redirect();
    }

    public function responseVK(UserRepository $userRepository)
    {
        if (Auth::id()) {
            return redirect()->route('index');
        }

        $user = Socialite::driver('vkontakte')->user();
        session(['soc.token' => $user->token]);
        $userInSystem = $userRepository->getUserBySocId($user,'vk');
        Auth::login($userInSystem);

        return redirect()->route('index');
    }
}
