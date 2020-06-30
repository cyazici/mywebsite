
<?php $i=1;?>
@extends('Apaneltemplate')
@section('baslik') Haberler @endsection
@section('icerik')

    <table class="table table-light mt-2">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Baslık</th>
            <th scope="col">İçerik</th>
            <th scope="col">Yazar</th>
            <th scope="col">Oluşturulma Tarihi</th>
            <th scope="col">İşlemler</th>
        </tr>
        </thead>
        <tbody>
        @foreach($news as $new)
        <tr>
            <th scope="row"><?php  echo $i?></th>
            <td>{{$new->title}}</td>
            <td>{{$new->content}}</td>
            <td>{{$new->writer}}</td>
            <td>{{$new->created_at}}</td>

            <td>
                <a class="btn btn-danger" href="#" role="button">Sil</a></td>

            <?php $i++;?>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
