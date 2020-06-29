<!DOCTYPE html>

<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="{{ asset('site') }}/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <style type="text/css">
        .cvstyle h1 {
            background: #E9365A;
            padding: 20px 0;
            font-size: 200%;
            font-weight: 300;
            text-align: center;
            color: #FFF;
            margin: -16px -16px 16px -16px;
        }
        .cvstyle {
            font: 100% Arial, Helvetica, sans-serif;
            max-width: 800px;
            margin: 10px auto;
            padding: 16px;
            background: #FFF;
        }

        .cvstyle input[type="submit"],
        .cvstyle input[type="button"]{
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            width: 49%;
            padding: 2%;
            background:#E9365A;
            color: #fff;
            float:left;
        }
        .cvstyle input[type="submit"]:hover,
        .cvstyle input[type="button"]:hover{
            background: #333333;
            transition: 500ms;
            cursor:pointer;
        }
    </style>
</head>
<body id="top">
    @include('inc.header')
<div class="wrapper bgded overlay">
    <div id="pageintro" class="hoc clear">
        <!-- ################################################################################################ -->
        <div class="flexslider basicslider">
            <ul class="slides">
                <li>
                    <article class="group">
                        <div class="one_half first">
                            <h2 class="heading">Siber Güvenlik</h2>
                            <p>Bilişim sistemlerinde insanlarla veya kurumlar arası kurduğumuz iletişimin, maddi veya manevi varlıklarımızın ve elektronik ortamdaki verilerimizin güvenliğinin ve bütünlüğünün korunması.</p>
                        </div>
                        <div class="one_half"><a href="#"><img src="images/demo/slider/slider1.jpg" alt=""></a></div>
                    </article>
                </li>
                <li>
                    <article class="group">
                        <div class="one_half first">
                            <h2 class="heading">Siber Güvenlik</h2>
                            <p>Bilişim sistemlerinde insanlarla veya kurumlar arası kurduğumuz iletişimin, maddi veya manevi varlıklarımızın ve elektronik ortamdaki verilerimizin güvenliğinin ve bütünlüğünün korunması..</p>
                        </div>
                        <div class="one_half"><a href="#"><img src="images/demo/slider/slider2.jpg" alt=""></a></div>
                    </article>
                </li>
                <li>
                    <article class="group">
                        <div class="one_half first">
                            <h2 class="heading">Siber Güvenlik</h2>
                            <p>Bilişim sistemlerinde insanlarla veya kurumlar arası kurduğumuz iletişimin, maddi veya manevi varlıklarımızın ve elektronik ortamdaki verilerimizin güvenliğinin ve bütünlüğünün korunması.</p>
                        </div>
                        <div class="one_half"><a href="#"><img src="images/demo/slider/slider3.jpg" alt=""></a></div>
                    </article>
                </li>
            </ul>
        </div>
        <!-- ################################################################################################ -->
    </div>
</div>
<!-- ################################################################################################ -->

@yield('icerik')

@include('inc.footer')
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="{{asset('site')}}/layout/scripts/jquery.min.js"></script>
<script src="{{asset('site')}}/layout/scripts/jquery.backtotop.js"></script>
<script src="{{asset('site')}}/layout/scripts/jquery.mobilemenu.js"></script>
<script src="{{asset('site')}}/layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>
