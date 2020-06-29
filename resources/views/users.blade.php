<?php $i=1;?>
@extends('Apaneltemplate')
@section('baslik') Üye Bilgileri  @endsection
@section('icerik')
<table class="table table-light mt-2">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">İsim</th>
        <th scope="col">E-mail</th>
        <th scope="col">Yetki</th>
        <th scope="col">İşlemler</th>
    </tr>
    </thead>
    <tbody>

    @foreach($user as $users)
        <tr>
            <th scope="row"><?php echo $i ?></th>
            <td>{{$users->name}}</td>
            <td>{{$users->email}}</td>
            <td>{{$users->yetki}}</td>
            <td><a class="btn btn-primary" href="{{route('guncelleme-sayfasi',$users->id)}}" role="button">Düzenle</a>
                <a class="btn btn-danger" href="{{route('kullanici-sil',$users->id)}}" role="button">Sil</a></td>
          <?php  $i++; ?>
        </tr>
    @endforeach

    </tbody>
</table>
@endsection
