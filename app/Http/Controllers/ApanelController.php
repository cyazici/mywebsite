<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;
use App\User;
use App\abouts;
use Illuminate\Support\Facades\DB;
class ApanelController extends Controller
{
    public function PanelHome()
    {
        $news = news::all();
        return view('PanelHome', compact('news'));
        }

        public function haberekle(){
        return view('haberekle');
    }

      public function haberkayit(){
        $news =new news();
        $news->title=request('title');
        $news->content=request('content');
        $news->writer=request('writer');
        $news->save();

        return redirect()->intended(route('Panel.show'));
    }


            public function users(){
                $user=User::all();
                return view('users',compact('user'));

            }
            public function userupdate(){
                return view('userupdate');
            }
            //Update sayfasına id ye göre güncellenecek verileri çekiyorum
            public function updateusers($id){
                $user=User::find($id);
                return view('userupdate',compact('user'));
            }
            //Update sayfası içinde güncelleme işlemi yapıyorum.
            public function update($id){
                $user=User::find($id);
                $user->yetki=\request()->input('yetki');
                $user->name=\request('name');
                $user->email=\request('email');
                $user->save();
                return redirect()->intended(route('users.show'));
            }
            public function kullanicisil($id){
                $user=DB::table('users')->where('id',$id)->delete();
                return redirect()->intended(route('users.show'));
            }
          public function habersil($id){
              $user=DB::table('news')->where('id',$id)->delete();
              return redirect()->intended(route('Panel.show'));
         }



            public function hakkimda(){
                $about=DB::table('abouts')->get();
                if(count($about) <= 0) {
                    $about = new abouts;
                } else {
                    $about = $about[0];
                }

                return view('hakkimda',compact('about'));
            }

            public function hakkimdaguncelle(){

        if(\request('about_id') == '') {
            $abouts=abouts::create(
                [
                    'name'=>\request('name'),
                    'phone'=>\request('phone'),
                    'email'=>\request('email'),
                    'adres'=>\request('adres'),
                    'about'=>\request('about'),
                    'Hschool'=>\request('Hscholl'),
                    'uni'=>\request('uni'),
                ]
            );
        } else {
            $abouts=abouts::where('id', request('about_id'))->update(
                [
                    'name'=>\request('name'),
                    'phone'=>\request('phone'),
                    'email'=>\request('email'),
                    'adres'=>\request('adres'),
                    'about'=>\request('about'),
                    'Hschool'=>\request('Hscholl'),
                    'uni'=>\request('uni'),
                ]
            );
        }

                return redirect()->intended(route('hakkimda.show'));
        }




        public function uyeiletisim(){
                return view('uyeiletisim');}


}
