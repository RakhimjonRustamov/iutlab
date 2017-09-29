@extends('layouts.app')
@section('title', 'IutLab Home')
@section('stylesheets')

    <style type="text/css">
        .menu-btn{color:white;}
        .navbar-nav>li>a{color: white!important;}
        .navbar-brand{color:white!important;}
        .navbar{background: none;}
        .navbar-nav>li>a:hover{color: white!important;}
        /*.navbar{background: linear-gradient(rgba(0,0,0,0.8), rgba(10,60,30,0));}*/
        #section0 h1{
            padding: 250px 0;
            text-align: center!important;
            font-family: Brush Script MT;
            font-size: 150px;
        }
        .button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 100;
            padding: 10px !important;
            text-decoration: none!important;
            border: 1px solid #fff;
            background: #000;
            font-family: Moscow;
            color: #fff;
            font-size: 16px;
            border-radius: 22px;
            transition: 0.5s;
            cursor: pointer;
        }
        .button:hover {
            color: #000!important;
            background: #fff;
        }

        .button:focus {
            outline-width: 0;
            color: white;
        }
    </style>
    <style type="text/css">
        .text-animation
        {
            width: 100%;
            list-style: none;
            position: relative;
            left: -15px;
            top: 50%;
            transform: translateY(-50%);
        }
        .text-animation li.anim{
            display: inline-block;
            margin-right: 5px;
            font-weight: 300;
            font-family: Brush Script MT;
            font-size: 10em;
            color: #fff;
            opacity: 1;
            transition: all 2s ease;
        }
        .text-animation li.anim:last-child{
            margin-right: 0;
        }
        .text-animation li:nth-child(1){color:blue;}
        .text-animation li:nth-child(2){color:blue;}
        .text-animation li:nth-child(8){color:yellow;}
        .text-animation li:nth-child(9){color:yellow;}
        .text-animation li:nth-child(10){color:yellow;}
        .text-animation li:nth-child(11){color:yellow;}
        .text-animation li:nth-child(12){color:yellow;}
        .text-animation li:nth-child(13){color:yellow;}
        .text-animation li:nth-child(14){color:yellow;}
        .text-animation li:nth-child(15){color:yellow;}
        .text-animation .hidden1{
            opacity: 0;
        }
        .text-animation.hidden1 li.anim:nth-child(1){ transform: translateX(-300px) translateY(-110px);}
        .text-animation.hidden1 li.anim:nth-child(2){ transform: translateX(-190px) translateY(100px);}
        .text-animation.hidden1 li.anim:nth-child(3){ transform: translateX(-180px) translateY(30px);}
        .text-animation.hidden1 li.anim:nth-child(4){ transform: translateX(-250px) translateY(-120px);}
        .text-animation.hidden1 li.anim:nth-child(5){ transform: translateX(-195px) translateY(80px);}
        .text-animation.hidden1 li.anim:nth-child(6){ transform: translateX(60px) translateY(70px);}
        .text-animation.hidden1 li.anim:nth-child(7){ transform: translateX(30px) translateY(-90px);}
        .text-animation.hidden1 li.anim:nth-child(8){ transform: translateX(-80px) translateY(-130px);}
        .text-animation.hidden1 li.anim:nth-child(9){ transform: translateX(89px) translateY(40px);}
        .text-animation.hidden1 li.anim:nth-child(10){ transform: translateX(-238px) translateY(-66px);}
        .text-animation.hidden1 li.anim:nth-child(11){ transform: translateX(190px) translateY(90px);}
        .text-animation.hidden1 li.anim:nth-child(12){ transform: translateX(60px) translateY(100px);}
        .text-animation.hidden1 li.anim:nth-child(13){ transform: translateX(-90px) translateY(-190px);}
        .text-animation.hidden1 li.anim:nth-child(14){ transform: translateX(-50px) translateY(-165px);}
        .text-animation.hidden1 li.anim:nth-child(15){ transform: translateX(300px) translateY(-20px);}
    </style>
    <style type="text/css">
        @media (max-width: 900px){
            .navbar{background: none!important;}
            .navbar-toggle .icon-bar{background-color: white!important; margin-right: 150px!important;width: 30px; height: 3px; margin: 5px 0;}
            #myNavbar {background: linear-gradient(rgba(255,255,255,0.6),rgba(255,255,255,0.6))!important;color:black!important;}
            .navbar-nav>li>a{color: black!important;}
        }
    </style>

@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('js/jquery.fullPage.js')}}"></script>

    <!-- fullpage script -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage();
        });
    </script>


    <!-- text animation -->
    <script type="text/javascript">
        $(function(){
            setTimeout(function(){
                $(".text-animation").removeClass("hidden1");
            }, 1200);
        });
    </script>

@endsection

@section('content')
    <div id="fullpage">
        <!-- section 0 -->
        <div class="section" id="section0">
            <ul class="text-animation hidden1" align="center">
                <li class="anim">W</li>
                <li class="anim">e</li>
                <li class="anim"></li>
                <li class="anim">A</li>
                <li class="anim">r</li>
                <li class="anim">e</li>
                <li class="anim"></li>
                <li class="anim">C</li>
                <li class="anim">r</li>
                <li class="anim">e</li>
                <li class="anim">a</li>
                <li class="anim">t</li>
                <li class="anim">i</li>
                <li class="anim">v</li>
                <li class="anim">e</li>
            </ul>
            </ul>
        </div>
        <!-- section 1 -->

        <div class="section" id="section1">
            <center><img class="section1" style="padding: 170px 0;" src="{{asset('images/img/main1.png')}}"></center>
        </div>

        <!-- section 2 -->
        <div class="section" id="section2">
            <center><h1>index</h1><img class="section2" src="{{asset('images/img/main2.png')}}"></center>
        </div>

        <!--section 3 -->
        <div class="section" id="section3">
            <center><h1>Fully <font color="">responsive</font> websites</h1><img class="section3" src="{{asset('images/img/responsive.png')}}"></center>
        </div>
    </div>
@endsection
