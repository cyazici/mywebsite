<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

use Illuminate\Http\Request;
use App\User;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Reference;

class KullaniciController extends Controller
{
    public function register(){
        return view('register');
    }

    public function login(){
        return view('login');
    }
    public  function logout(){
        auth()->logout();
        return redirect()->to('/login');
    }
    public function kayit(Request $request){

        $user =new User;
        $user->name=request('name');
        $user->email=request('email');
        $user->password=bcrypt(request('password'));
        $user->yetki='2';
        $user->save();
        return redirect()->intended(route('login.show'));
                   /* return view('register');*/

    }

    public function Giris(Request $request)
    {

        $aa = $request->only('email', 'password');

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($aa, request()->input('remember'))) {
            $user = auth()->user();


            if (request()->input('remember') !== null) {
                Cookie::queue('email', $user->email, 120);
                Cookie::queue('password', request('password'), 120);

            } else {
                Cookie::queue( Cookie::forget('email'));
                Cookie::queue( Cookie::forget('password'));
            }

           /* if ($user->yetki=='2') {
                return redirect()->intended(route('index'));
            }
            else if ($user->yetki=='1' || $user->hasRole('üye')) {
                return redirect()->intended(route('index'));
            }*/
            if($user->yetki=='1' || '2'){
                return redirect()->intended(route('index'));
            }

            else {
                auth()->logout();
            }

        } else {
            return redirect()->intended(route('login.show'));
        }
    }




}

