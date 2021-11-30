<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class OauthController extends Controller
{
    public function redirect_openstreetmap()
    {
        return Socialite::driver('openstreetmap')->redirect();
    }

    public function callback_openstreetmap()
    {
        $user = Socialite::driver('openstreetmap')->user();
        // $user->token
    }
/*
    public function redirect_mediawiki($id)
    {
        return Socialite::driver('mediawiki')->redirect();
    }

    public function callback_mediawiki($id)
    {
        $user = Socialite::driver('mediawiki')->user();
        // $user->token
    }
*/
}

