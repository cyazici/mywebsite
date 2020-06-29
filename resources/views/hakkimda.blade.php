@extends('Apaneltemplate')
@section('baslik') Hakkimda @endsection

@section('icerik')



    <form method="POST" class="col-md-12 mt-5" action="{{route('aboutupdate.show')}}" >
        @csrf
    <input type="hidden" name="about_id" value="{{$about->id !== null ? $about->id : '' }}">
        <div class="form-group">
            <div class="form-group ">
                <label for="inputEmail4">Ad Soyad</label>
                <input type="text" class="form-control" id="inputEmail4" name="name" value="{{$about->name !== null ? $about->name : '' }}">
            </div>
            <div class="form-group">
                <div class="form-group ">
                    <label for="inputEmail4">Telefon</label>
                    <input type="text" class="form-control" id="inputEmail4" name="phone" value="{{$about->phone !== null ? $about->phone : '' }}">
                </div>
                <div class="form-group">
                    <div class="form-group ">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" name="email" value="{{$about->email !== null ? $about->email : '' }}">
                    </div>
                    <div>
                        <label for="exampleFormControlTextarea1">Adres</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="adres">{{$about->adres !== null ? $about->adres : '' }}</textarea>
                    </div>

            <div>
            <label for="exampleFormControlTextarea1">Hakkimda</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="about">{{$about->about !== null ? $about->about : '' }}</textarea>
            </div>
                    <div class="form-group">
                        <div class="form-group ">
                            <label for="inputEmail4">Lise</label>
                            <input type="text" class="form-control" id="inputEmail4" name="Hscholl" value="{{$about->Hschool !== null ? $about->Hschool : '' }}">
                        </div>
                    </div>
                        <div class="form-group">
                            <div class="form-group ">
                                <label for="inputEmail4">Üniversite</label>
                                <input type="text" class="form-control" id="inputEmail4" name="uni" value="{{$about->uni !== null ? $about->uni : '' }}">
                            </div>


                </div>
                </div></div></div>

        <button type="submit" class="btn btn-primary mt-2">Güncelle</button>
    </form>


@endsection
