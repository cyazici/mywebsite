<?php

namespace App\Http\Controllers;

use App\messages;
use Illuminate\Http\Request;
use App\news;
use App\abouts;
use App\User;

class SiteController extends Controller
{
    public function index(){
        $news=news::all();

      return view('index',compact('news'));
    }
    public function about(){
        $abouts=abouts::all();
        $news=news::all();
        return view('about',compact('abouts','news'));

    }

    public function uyeiletisim(){
        $userdata=User::all()->where('id',auth()->user()->id);
        $news=news::all();
        return view('uyeiletisim',compact('userdata','news'));

    }
    public  function mesajgonder(){
        $mesaj=new messages();
        $mesaj->userId=auth()->user()->id;
        $mesaj->message=\request('message');
        $mesaj->save();
        return redirect()->intended(route('uyeiletisim.show'));
        }


}
