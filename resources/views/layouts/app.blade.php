<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Alvaro Trigo Lopez" />
    <meta name="description" content="fullPage full-screen backgrounds." />
    <meta name="keywords"  content="fullpage,jquery,demo,screen,fullscreen,backgrounds,full-screen" />
    <meta name="Resource-type" content="Document" />

    <link rel="shortcut icon" href="{{ asset('images/img/Marck-Design-Logo.png')}}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/media-queries.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>

        @yield('stylesheets')

        @yield('scripts')



</head>
<body data-controller="portfolio" >

<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <a href="{{url('projects')}}">Последние проекты</a>
        <a href="{{route('pages.service')}}">Сервисы</a>
        <a href="{{url('about')}}">О нас</a>
        <a href="{{url('contact')}}">Свяжитесь с нами</a>
        <a href="{{url('blog')}}">Блог</a>
    </div>
</div>


<!-- navbar -->
<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="menu-btn" onclick="openNav()">&#9776; MENU</button>
            <a class="navbar-brand" href="{{url('/')}}">IUT<span>Lab</span></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar" >
            <ul class="nav navbar-nav navbar-right" style="color:white;">
                <li class="active"><a href="{{url('projects')}}">Последние проекты</a></li>
                <li><a href="{{route('pages.service')}}">Сервисы</a></li>
                <li><a href="{{url('about')}}">О нас</a></li>
                <li><a href="{{url('contact')}}">Свяжитесь с нами</a></li>
                <li><a href="{{url('blog')}}">Блог</a></li>
            </ul>
        </div>
    </div>
</nav>

<a class="forkit" data-text="Отправить Запрос" data-text-detached="Тянуть вниз >"></a>

@yield('content')



<!-- preloader -->
<div id="hellopreloader"><div id="hellopreloader_preload"></div></div>




<!-- request form -->
<div id="request_form">
    <div class="close-button"><span class="fa" style="font-family: 'fontawesome'!important;">&#xf057;</span></div>
    <div style="margin-top: 60px;">
        <div class="title">Расскажите нам о<span> Своем</span> Проекте</div>
        <div lang="en-US" dir="ltr">
            <div class="col-md-6 col-md-offset-3">
                <div id="contact-form" style="position: relative;">
                    <center><form method="POST" name="myForm">
                            <div class="row" style="padding-bottom: 65px;">
                                <div class="col-md-6 col-sm-6 column" style="margin-right: 0!important;">
                                    <input id="full_name" maxlength="40" name="full_name" size="20" type="text" placeholder="Ваше имя" class="form-control" required />
                                    <input id="email" maxlength="80" name="email" size="20" type="text" placeholder="Адрес электронной почты" class="form-control" required />
                                    <input id="phone" maxlength="40" name="phone" size="20" type="text" placeholder="Номер телефона" class="form-control" required />
                                    <input id="company" maxlength="40" name="company" size="20" type="text" placeholder="Название компании" class="form-control" />
                                </div>
                                <div class="col-md-6 col-sm-6 column">
                                    <textarea id="description" name="description" cols="30" rows="6" placeholder="Краткое описание проекта" class="form-control" required/ ></textarea>
                                    <input id="budget" name="budget" type="text" size="30" placeholder="Бюджет проекта" class="form-control" required />
                                </div>
                            </div>
                            <div class="row" style="margin-left: 0!important; margin-right: 0!important;">
                                <select class="selectpicker form-control" multiple data-max-options="8" style="color: #f1c40f; font-weight: bold;">
                                    <option selected disabled hidden style="color: #f1c40f;font-weight: bold;">Мне нужна помощь:</option>
                                    <option value="1">Редизайн моего сайта</option>
                                    <option value="2">Новый веб-сайт</option>
                                    <option value="3">Электронная торговля</option>
                                    <option value="4">Мобильное приложение</option>
                                    <option value="5">Брендинг</option>
                                    <option value="6">Маркетинг</option>
                                    <option value="7">Поддержка</option>
                                    <option value="8">Другие</option>
                                </select>
                            </div>
                            <div class="col-sm-12 text-center">
                                <center><button id="contactSubmit" type="submit" name="submit">Отправить</button></center>
                            </div>
                            <div style="text-align: center; color: #f1c40f;" class="form-error"></div>
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SCRIPT FILES OF ALL PAGE -->
<!-- preloader script-->
<script type="text/javascript">var hellopreloader = document.getElementById("hellopreloader_preload");function fadeOutnojquery(el){	el.style.opacity = 1;var interhellopreloader = setInterval(function(){el.style.opacity = el.style.opacity - 0.05;if(el.style.opacity <=0.05){clearInterval(interhellopreloader);hellopreloader.style.display = "none";}},16);}window.onload = function(){
        setTimeout(function(){fadeOutnojquery(hellopreloader);},1000);};
</script>
<!-- fullpage script -->
<script type="text/javascript">
    $('#fullpage').fullpage({
        onLeave: function(index, nextIndex, direction){
            var leavingSection = $(this);

            if(index == 1 && direction == 'down'){
                setTimeout(function(){
                    $(".text-animation").addClass("hidden1");
                }, 500);
            }
            else if(index == 2 && direction == 'up'){
                setTimeout(function(){
                    $(".text-animation").removeClass("hidden1");
                }, 500);
            }

            if(index == 1 && direction =='down'){
                $(".section1").addClass("tada");
                $(".section").addClass("mymove");
            }
            //after leaving section 2
            else if(index == 2 && direction =='down'){
                $(".section2").addClass("flipInX");
                $(".section").addClass("mymove");
            }
            else if(index == 3 && direction == 'down'){
                $(".section3").addClass("bounceInLeft");
                $(".section").addClass("mymove");
            }

            else if(index == 2 || index == 3 || index == 4 && direction == 'up'){
                $(".section1").removeClass("tada");
                $(".section2").removeClass("flipInX");
                $(".section3").removeClass("bounceInLeft");
            }
        }
    });
</script>

<script>
    function openNav() {
        document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type='text/javascript' src='{{asset('js/forkit.min.js')}}'></script>
<script type='text/javascript' src="{{asset('js/production.js')}}"></script>
</body>
</html>