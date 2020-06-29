@extends('template')

@section('icerik')
    @foreach($abouts as $about)
    @endforeach
    <div class="cvstyle">
        <h1>CV</h1>
        <form id="about">
            <div class="about" >
                <div id="HTMLtoPDF" contenteditable="false">

                    <div >
                        <div >
                            <h3 style="color:#000;">Ad Soyad</h3>
                        </div>
                        <div >
                            <p style="color:#000;">{{$about->name}}</p>
                        </div>
                    </div>
                    <div >
                        <div >
                            <h3 style="color:#000;">Telefon </h3>
                        </div>
                        <div >
                            <p style="color:#000;">{{$about->phone}}</p>
                        </div>
                    </div>
                    <div >
                        <div >
                            <h3 style="color:#000;">Mail</h3>
                        </div>
                        <div >
                            <p style="color:#000;">{{$about->email}}</p>
                        </div>
                    </div>
                    <div >
                        <div >
                            <h3 style="color:#000;">Adres</h3>
                        </div>
                        <div >
                            <p style="color:#000;">{{$about->adres}}</p>
                        </div>
                    </div>

                    <h3 style="color:#000;">Hakkimda</h3>
                    <div >
                        <p style="color:#000;">{{$about->about}}</p>
                    </div>
                    <h3 style="color:#000;">Egitim</h3>
                    <div >
                        <div >
                            <h3 style="color:#000;">Lise</h3>
                        </div>
                        <div >
                            <p style="color:#000;">{{$about->Hschool}}</p>
                        </div>
                    </div>
                    <div >
                        <div >
                            <h3 style="color:#000;">Universite</h3>
                        </div>
                        <div >
                            <p style="color:#000;">{{$about->uni}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <input type="button" id="duzenle" value="Düzenle" onClick="Edit()"/>
            <input type="button" value="İndir" onClick="olustur()"/>
        </form>
    </div>
    <script src="{{asset('site')}}/layout/scripts/about.js"></script>
@endsection
