@extends('Apaneltemplate')
@section('baslik') Üye Bilgi Güncelle @endsection()
@section('icerik')

    <form class="col-md-12 mt-5" method="POST" action="{{route('kullanici-guncelle',$user->id)}}">
        @csrf
        @method('PUT')

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Ad Soyad</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" value="{{$user->name}} "name="name"">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label" >E-mail</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" value="{{$user->email}}" name="email">
            </div>
        </div>
        <fieldset class="form-group">
            <div class="row">

                <legend class="col-form-label col-sm-2 pt-0">Yetki</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="yetki" id="gridRadios1" value="1" {{$user->yetki=='1' ? 'checked':''}} >
                        <label class="form-check-label" for="gridRadios1">
                            Admin
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="yetki" id="gridRadios2" value="2" {{$user->yetki=='2' ? 'checked':''}} >
                        <label class="form-check-label" for="gridRadios2">
                            Üye
                        </label>
                    </div>

                </div>
            </div>
        </fieldset>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Güncelle</button>
            </div>
        </div>
    </form>
@endsection
