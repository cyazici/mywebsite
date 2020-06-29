@extends('Apaneltemplate')
@section('icerik')
@section('baslik')
    Haber Ekle
@endsection()

    <form method="POST" class="col-md-12 mt-5" action="{{route('haber-ekle')}}" >
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Başlık</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="title" >
        </div>


        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">İçerik</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>


        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Yazar</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="writer">
        </div>

        <button type="submit" class="btn btn-primary mt-2">Kaydet</button>
    </form>


@endsection
