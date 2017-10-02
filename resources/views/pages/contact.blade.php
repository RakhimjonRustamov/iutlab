@extends('layouts.app')
@section('title', 'Contact Us')
@section('stylesheets')

@endsection

@section('scripts')
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
@endsection

@section('content')
    <div class="container-fluid" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('images/img/contact-bg.jpg'); background-position: center; background-attachment: fixed; background-size: cover; background-repeat: no-repeat;">
    <div class="row top-animate">
        <div class="top-info col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1>Свяжитесь с нами</h1>
        </div>
        <div class="box col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <center>
                <div class="col-md-3">
                    <h2>Начните проект</h2>
                    <p>Ташкент: (998) 289-9999</a></p>
                </div>
                <div class="col-md-3">
                    <h2>Запросы средств массовой информации</h2>
                    <p>Все коммуникации и прессы.</p>
                </div>
                <div class="col-md-3">
                    <h2>Карьера</h2>
                    <p>Если у вас есть потенциал</p>
                    <p>отправьте нам свое резюме.</p>
                </div>
                <div class="col-md-3">
                    <h2>Все остальное</h2>
                    <p>Не знаете, с чего начать?</p>
                    <p>Мы укажем вам в правильном направлении.</p>
                </div>
            </center>
        </div>
    </div>

    <div class="row slideanim" style="margin-top: 100px;">
        <h2 class="contact-form-heading">Отправить Запрос</h2>
        <div class="col-md-6 col-md-offset-3">

           <form action="{{route('contact')}}" method="POST" >
               {{ csrf_field() }}
               <input type="text" class="form-control" name="email" placeholder="Enter email">
               <input  type="text"  class="form-control" name="message" placeholder="Enter message">
               <button type="submit" class="btn btn-success">Send Message</button>
           </form>


        </div>
    </div>
    <div class="row">
        <div class="heading">
            <h2>Наш офис</h2>
            <h3>Ташекент</h3>
        </div>
        <center>
            <div class="map" id="map" style="width:680px;height:480px;"></div>
        </center><br>
        <div>
            <address>
                9, улица Зиёлилар<br>район М.Улугбек<br>город Ташкент, Узбекистан<br>(998) 289-9999
            </address>
        </div>
    </div>

    </div>

    <div class="row">
        <footer id="footer">
            <ul class="footer social">
                <li><a target="_blank" href="https://www.facebook.com/iutlab/" class="fa fb"><span style="font-family: 'fontawesome'!important;">&#xf09a;</span></a></li>
                <li><a target="_blank" href="https://twitter.com/iutlab" class="fa tw" style="font-family: 'fontawesome'!important;">&#xf099;</a></li>
                <li><a target="_blank" href="https://www.linkedin.com/company/iutlab" class="fa linkedin" style="font-family: 'fontawesome'!important;">&#xf0e1;</a></li>
                <li><a target="_blank" href="https://plus.google.com/+iutlab/posts?hl=en" class="fa gp" style="font-family: 'fontawesome'!important;">&#xf0d5;</a></li>
                <li><a target="_blank" href="https://www.instagram.com/iutlab" class="fa in" style="font-family: 'fontawesome'!important;">&#xf16d;</a></li>
            </ul>
            <div class="bd-footer">
                <ul>
                    <li>© 2017 Все права защищены.<a href="{{url('/')}}">IUTLAB</a></li>
                </ul>
            </div>
        </footer>
    </div>


    <!-- parallax js -->
    <script type="text/javascript">
        $(window).scroll(function () {
            $(".contact-section").css("background-position","50% " + ($(this).scrollTop() / 2) + "px");
        });
    </script>

    <!-- map -->
    <script>
        function initMaps() {
            var address = new ymaps.Map("map", {
                center: [41.338579, 69.334552],
                zoom: 15,
                controls: []
            });
            address.geoObjects.add(new ymaps.Placemark([41.338579, 69.334552], {
                balloonContent: 'Наш Офис'
            }, {
                preset: 'islands#redHomeIcon',
                iconColor: '#F44336'
            }));
        }
        ymaps.ready(initMaps);
    </script>

    <!-- animation -->
    <script type="text/javascript">
        $(window).scroll(function() {
            setTimeout(function(){
                $(".slideanim").each(function(){
                    var pos = $(this).offset().top;
                    var winTop = $(window).scrollTop();
                    if (pos < winTop + 600) {
                        $(this).addClass("bounceInLeft");
                    }
                });
            }, 100);
        });
    </script>

    <script type="text/javascript">
        $(window).ready(function() {
            setTimeout(function(){
                $(".top-animate").each(function(){
                    var pos = $(this).offset().top;

                    var winTop = $(window).scrollTop();
                    if (pos < winTop + 1000) {
                        $(this).addClass("zoomInDown");
                    }
                });
            }, 1000);
        });
    </script>

@endsection