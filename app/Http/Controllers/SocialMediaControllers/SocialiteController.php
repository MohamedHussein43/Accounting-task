<?php

namespace App\Http\Controllers\SocialMediaControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SocialiteController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleGoogleCallback()
    {
        try{
            $user = Socialite::driver('google')->user();
            $finduser = User::where('social_id', $user->id)->first();
            if($finduser){
                Auth::login($finduser);
                return redirect()->route('dashboard');
            }
            else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id' => $user->id,
                    'social_type' => 'google',
                    'password' => Hash::make('my-google'),
                ]);
                Auth::login($newUser);
                return redirect()->route('dashboard');
            }

        }
        catch(Exception $e){
            dd($e->getMassage());
        }
    }

    public function handleFacebookCallback()
    {
        try{
            $user = Socialite::driver('facebook')->user();
            $finduser = User::where('social_id', $user->id)->first();
            if($finduser){
                Auth::login($finduser);
                return redirect()->route('dashboard');
            }
            else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id' => $user->id,
                    'social_type' => 'facebook',
                    'password' => Hash::make('my-facebook'),
                ]);
                Auth::login($newUser);
                return redirect()->route('dashboard');
            }

        }
        catch(Exception $e){
            dd($e->getMassage());
        }
    }
}
