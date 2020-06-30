<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::group(['middleware'=>['A']],function() {
Route::get('/','SiteController@login')->name('login.s');
Route::get('index','SiteController@index')->name('index');
Route::get('about','SiteController@about')->name('about.show');
Route::get('uyeiletisim','SiteController@uyeiletisim')->name('uyeiletisim.show');
//});

//-----------------Yönetim paneli İşlemleri

Route::group(['middleware'=>['admin']],function() {

    Route::get('haberekle', 'ApanelController@haberekle')->name('haberekle.show');

    Route::post('haber-ekle','ApanelController@haberkayit')->name('haber-ekle');


    Route::get('PanelHome','ApanelController@PanelHome')->name('Panel.show');


    Route::get('hakkimda', 'ApanelController@hakkimda')->name('hakkimda.show');

    Route::get('users', 'ApanelController@users')->name('users.show');

    Route::get('userupdate','ApanelController@userupdate')->name('userupdate.show');

});

Route::get('kullanici-guncelle/{id}','ApanelController@updateusers')->name('guncelleme-sayfasi');
Route::put('kullanici-guncelle/{id}','ApanelController@update')->name('kullanici-guncelle');
Route::get('kullanici-sil/{id}','ApanelController@kullanicisil')->name('kullanici-sil');
Route::post('aboutupdate','ApanelController@hakkimdaguncelle')->name('aboutupdate.show');

Route::post('kayit-et','KullaniciController@kayit')->name('kayit-et');
Route::post('giris-yap','KullaniciController@Giris')->name('giris-yap');

Route::get('haber-sil/{id}','ApanelController@habersil')->name('haber-sil');

//--------------

Route::get('kayit','KullaniciController@register')->name('register.show');
Route::get('login','KullaniciController@login')->name('login.show');

Route::post('cikis','KullaniciController@logout')->name('cikis');

Route::post('mesajgonder','SiteController@mesajgonder')->name('mesajgonder.show');
//a

//Route::get('yonetimpaneli','SiteController@panel')->name('');
/////

