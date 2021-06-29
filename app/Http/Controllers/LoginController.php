<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Validator;
use Socialite;
use Auth;

class LoginController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('discord')->redirect();
    }

    public function signinFacebook()
    {
        try {

            $user = Socialite::driver('discord')->user();
            $userCol = User::where('discord_id', $user->id)->first();


            if($userCol){
                Auth::login($userCol);
                return redirect('/dashboard');
            }else{
                $addUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'discord_id' => $user->id,
                    'avatar_url' => $user->avatar,
                    'password' => encrypt('9ETypV2G2Vr493z5t4hwLR')
                ]);

                Auth::login($addUser);
                return redirect('/dashboard');
            }

        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
}
