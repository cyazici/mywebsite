@extends('template')
@section('icerik')
    @foreach($news as $new)
    @endforeach
    @foreach($userdata as $user)
    @endforeach
    <div class="row3">
        <div class="hoc container clear"  >

            <form method="POST" action="mesajgonder">
                @csrf
                <h2 style="padding-left:35px;  color:#E9365A;">İLETİŞİM FORMU</h2>
                <ul class="form-style-1">
                    <li><label>Ad Soyad <span class="required">*</span>
                        </label><input type="text"  class="field-divided"   name="name"  value="{{$user->name}}" readonly>
                    </li>

                    <li>
                        <label>Email <span class="required">*</span></label>
                        <input type="email"  class="field-long"  name="email" value="{{$user->email}}" readonly>
                    </li>

                    <li>
                        <label>Mesaj<span class="required">*</span></label>
                        <textarea  id="field5" class="field-long field-textarea" name="message">
        </textarea>
                    </li>

                    <li>
                        <input type="submit" value="Gönder" />
                    </li>
                </ul>
            </form>
        </div>

    </div>
@endsection
