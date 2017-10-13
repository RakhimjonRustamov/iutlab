@extends('layouts.app')
@section('title', 'IutLab Home')
@section('stylesheets')
    <style type="text/css">
        .menu-btn{color:black;}
        .navbar-nav>li>a{color: white!important;}
        .navbar-brand{color:white!important;}
        .navbar{background: none!important;}
        .navbar-nav>li>a:hover{color: white!important;}
        #section0 h1{
            padding: 250px 0 10px 0;
            text-align: center!important;
            font-family: Brush Script MT;
        }
        .section0-head,.section1-img,.section2-img,.section3-img,.section4-img{
            margin-top: 70px!important;
            width: 20%;
        }
        .section0-anim,.section1-anim,.section2-anim,.section3-anim{
            margin: 20px 0 0 0!important;
            color: white;
            width: 70%!important;
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
            font-family: open sans;
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
        div#text { width: 0px; height: 2em; white-space: nowrap; overflow: hidden;  }
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



@endsection
@section('content')
    <div id="fullpage">
        <!-- section 0 -->
        <div class="section" id="section0">
            <center>
                <div class="row">
                    <img class="section0-head" src="{{asset('images/img/logo.png')}}" />
                </div>
                <div class="row">
                    <div class="box">
                        <div id="message"></div>
                    </div>

                </div>
            </center>
        </div>
        <!-- section 1 -->

        <div class="section" id="section1">
            <center>
                <div class="row">
                    <img class="section1-img" src="{{asset('images/img/main/section1.svg')}}">
                </div>
                <div class="row">
                    <h3 class="section1-anim">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vehicula, ante sit amet faucibus accumsan, orci ligula fermentum urna, a efficitur ex libero eu nisl. Integer vulputate egestas nisi, at fermentum ligula accumsan in. Integer et ipsum at neque rhoncus ultricies. Phasellus velit leo, bibendum non magna eget, vestibulum consequat turpis. Phasellus eu volutpat magna, ultricies varius nibh. Proin efficitur porttitor massa eu dapibus. Donec sit amet tortor vitae dolor facilisis viverra. Quisque at fringilla lectus. Nunc vel sodales arcu, venenatis varius ipsum. Vivamus scelerisque nibh et suscipit commodo. Morbi quis augue id purus convallis luctus.</h3>
                </div>
            </center>
        </div>

        <!-- section 2 -->
        <div class="section" id="section2">
            <center>
                <div class="row">
                    <img class="section2-img" src="{{asset('images/img/main/section2.svg')}}">
                </div>
                <div class="row">
                    <h3 class="section2-anim">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vehicula, ante sit amet faucibus accumsan, orci ligula fermentum urna, a efficitur ex libero eu nisl. Integer vulputate egestas nisi, at fermentum ligula accumsan in. Integer et ipsum at neque rhoncus ultricies. Phasellus velit leo, bibendum non magna eget, vestibulum consequat turpis. Phasellus eu volutpat magna, ultricies varius nibh. Proin efficitur porttitor massa eu dapibus. Donec sit amet tortor vitae dolor facilisis viverra. Quisque at fringilla lectus. Nunc vel sodales arcu, venenatis varius ipsum. Vivamus scelerisque nibh et suscipit commodo. Morbi quis augue id purus convallis luctus.</h3>
                </div>
            </center>
        </div>

        <!--section 3 -->
        <div class="section" id="section3">
            <center>
                <div class="row">
                    <img class="section3-img" src="{{asset('images/img/main/section3.svg')}}">
                </div>
                <div class="row">
                    <h3 class="section3-anim">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vehicula, ante sit amet faucibus accumsan, orci ligula fermentum urna, a efficitur ex libero eu nisl. Integer vulputate egestas nisi, at fermentum ligula accumsan in. Integer et ipsum at neque rhoncus ultricies. Phasellus velit leo, bibendum non magna eget, vestibulum consequat turpis. Phasellus eu volutpat magna, ultricies varius nibh. Proin efficitur porttitor massa eu dapibus. Donec sit amet tortor vitae dolor facilisis viverra. Quisque at fringilla lectus. Nunc vel sodales arcu, venenatis varius ipsum. Vivamus scelerisque nibh et suscipit commodo. Morbi quis augue id purus convallis luctus.</h3>
                </div>
            </center>
        </div>
        <!-- section 4 -->
        <div class="section" id="section4">
            <center>
                <div class="row">
                    <img class="section4-img" src="{{asset('images/img/main/section4.svg')}}">
                </div>
                <div class="row">
                    <h3 class="section3-anim">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vehicula, ante sit amet faucibus accumsan, orci ligula fermentum urna, a efficitur ex libero eu nisl. Integer vulputate egestas nisi, at fermentum ligula accumsan in. Integer et ipsum at neque rhoncus ultricies. Phasellus velit leo, bibendum non magna eget, vestibulum consequat turpis. Phasellus eu volutpat magna, ultricies varius nibh. Proin efficitur porttitor massa eu dapibus. Donec sit amet tortor vitae dolor facilisis viverra. Quisque at fringilla lectus. Nunc vel sodales arcu, venenatis varius ipsum. Vivamus scelerisque nibh et suscipit commodo. Morbi quis augue id purus convallis luctus.</h3>
                </div>
            </center>
        </div>
    </div>
    <script type="text/javascript">
        $('#fullpage').fullpage({
            onLeave: function(index, nextIndex, direction){
                var leavingSection = $(this);

                if(index == 1 && direction == 'down'){
                    setTimeout(function(){
                        $(".section0-anim").removeClass("fadeInRight");
                        $(".section0-head").removeClass("fadeInLeft");
                    }, 100);
                }
                else if(index == 2 && direction == 'up'){
                    setTimeout(function(){
                        $(".section0-anim").addClass("fadeInRight");
                        $(".section0-head").addClass("fadeInLeft");
                    }, 100);
                }

                if(index == 1 && direction =='down'){
                    $(".section1-img").addClass("bounceIn");
                    $(".section1-anim").addClass("bounceIn");
                }
                //after leaving section 2
                else if(index == 2 && direction =='down'){
                    $(".section2-img").addClass("bounceInDown");
                    $(".section2-anim").addClass("bounceInUp");
                }
                else if(index == 3 && direction == 'down'){
                    $(".section3-img").addClass("fadeInRight");
                    $(".section3-anim").addClass("fadeInLeft");
                }
                else if(index == 4 && direction == 'down'){
                    $(".section3-anim").addClass("fadeInRight");
                    $(".section4-img").addClass("fadeInLeft");
                }

                else if(index == 2 || index == 3 || index == 4 || index == 5 && direction == 'up'){
                    $(".section1-anim").removeClass("bounceIn");
                    $(".section1-img").removeClass("bounceIn");
                    $(".section2-anim").removeClass("bounceInUp");
                    $(".section2-img").removeClass("bounceInDown");
                    $(".section3-img").removeClass("fadeInRight");
                    $(".section3-anim").removeClass("fadeInLeft");
                    $(".section3-anim").removeClass("fadeInRight");
                    $(".section4-img").removeClass("fadeInLeft");
                }
            }
        });
    </script>
    <script type="text/javascript">
        $(function(){
            setTimeout(function(){
                var timer, fullText, currentOffset, onComplete;

                function Speak(text, callback) {
                    fullText = text;
                    currentOffset = 0;
                    onComplete = callback;
                    timer = setInterval(onTick, 60);
                }

                function onTick() {
                    currentOffset++;
                    if (currentOffset == fullText.length) {
                        complete();
                        return;
                    }
                    var text = fullText.substring(0, currentOffset);
                    $("#message").html(text);
                }

                function complete() {
                    clearInterval(timer);
                    timer = null;
                    $("#message").html(fullText);
                    onComplete();
                }

                $(".box").click(function () {
                    complete();
                });

                Speak("Мотивированные студенты, которые делают мир лучше, создавая удивительные приложения и красивые сайты."
                );
            },1000);
        });
    </script>
@endsection
