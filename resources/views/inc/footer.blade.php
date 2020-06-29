<div class="wrapper row4">
    <footer id="footer" class="hoc clear">
        <!-- ################################################################################################ -->
        <div class="one_third first">
            <h6 class="title">İletİşİm Bİlgİlerİ</h6>
            <ul class="nospace linklist contact">
                <li><i class="fa fa-map-marker"></i>
                    <address>
                        Umuttepe kampüsü İzmit/Kocaeli
                    </address>
                </li>
                <li><i class="fa fa-phone"></i> (0262) 222 22 22<br>
                    (0262) 222 22 22</li>
                <li><i class="fa fa-fax"></i> (0262) 222 22 22</li>
                <li><i class="fa fa-envelope-o"></i> info@cuneytyazici.com</li>
            </ul>
        </div>
        <div class="one_third">
            @foreach($news as $new)
            <h6 class="title">Son Haberler</h6>
            <ul class="nospace linklist">
                <li><a href="#">{{$new->title}}</a></li>
                @endforeach

            </ul>
        </div>
        <div class="one_third">
            <h6 class="title">Bana Ulaşın</h6>
            <p class="btmspace-30">Aşağıdaki formdan iletişime geçebilirsiniz.</p>
            <form method="post" action="#">
                <fieldset>

                    <input class="btmspace-15" type="text" value="" placeholder="Konu">
                    <input class="btmspace-15" type="text" value="" placeholder="Email">
                    <textarea class="btmspace-15" placeholder="Mesaj"></textarea>
                    <button type="submit" value="submit">Gönder</button>
                </fieldset>
            </form>
        </div>
        <!-- ################################################################################################ -->
    </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
    <div id="copyright" class="hoc clear">
        <!-- ################################################################################################ -->
        <p class="fl_left">Copyright &copy;2019 - Tüm hakları saklıdır - <a href="#">cuneytyazici.com</a></p>

        <!-- ################################################################################################ -->
    </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
