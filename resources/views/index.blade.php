@extends('template')
@section('AdminPanelErişimLinki')
    @if(auth()->user()->yetki=='1')
        <li>  <a href="PanelHome">Yönetim Paneli</a></li>
    @endif
@endsection
@section('icerik')
   {{-- <div class="wrapper row3">
        <main class="hoc container clear">
            <!-- main body -->
            <!-- ################################################################################################ -->
            <div class="center btmspace-50">
                <h3 class="font-x2 nospace">DUYURULAR</h3>

            </div>
            <ul class="nospace group services">
                <li class="one_third first">
                    <article><a href="#"><i class="fa fa-key"></i></a>
                        <h6 class="heading">Duyuru 1</h6>
                        <p>yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı &hellip;</p>
                        <footer><a href="#">Devamını oku&raquo;</a></footer>
                    </article>
                </li>
                <li class="one_third">
                    <article><a href="#"><i class="fa fa-key"></i></a>
                        <h6 class="heading">Duyuru 2</h6>
                        <p>yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı &hellip;</p>
                        <footer><a href="#">Devamını oku &raquo;</a></footer>
                    </article>
                </li>
                <li class="one_third">
                    <article><a href="#"><i class="fa fa-key"></i></a>
                        <h6 class="heading">Duyuru 3</h6>
                        <p>yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı yazı &hellip;</p>
                        <footer><a href="#">Devamını oku &raquo;</a></footer>
                    </article>
                </li>
                <li class="one_third first">

                </li>
            </ul>
            <!-- ################################################################################################ -->
            <!-- / main body -->
            <div class="clear"></div>
        </main>
    </div>--}}

    <div class="wrapper row3">
        <div class="hoc container clear">
            <!-- ################################################################################################ -->
            <div class="center btmspace-50">
                <h3 class="font-x2 nospace">HABERLER</h3>

            </div>
            <div class="group">
              @foreach($news as $new)
                <article class="one_second"><a href="#"><img class="btmspace-30" src="images/demo/haber.jpg" alt=""></a>
                    <h4 class="nospace btmspace-10 font-x1 uppercase">{{$new->title}}</h4>
                    <ul class="nospace btmspace-10 group font-xs">
                        <li class="fl_left">
                            <time datetime="2045-04-04">{{--Tarihin rakamı--}}<sup>th</sup> {{$new->created_at}}</time>
                        </li>
                        <li class="fl_right"><a href="#">{{$new->writer}} </a>Tarafından Eklendi</li>
                    </ul>
                    <hr>
                    <p>{{$new->content}} </p>
                    <p class="nospace"><a href="#">Devamını oku &raquo;</a></p>
                </article>
                @endforeach
            </div>
            <!-- ################################################################################################ -->
        </div>
    </div>
    <!-- ################################################################################################ -->
@endsection
