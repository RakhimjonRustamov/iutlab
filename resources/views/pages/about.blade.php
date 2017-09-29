@extends('layouts.app')
@section('title', 'About Us')
@section('stylesheets')
    <style type="text/css">
        body {font-size: 170%!important;}
        .section-hr{border: 1px solid red;}
    </style>

    <style type="text/css">#nav{margin-right:100px}</style>

@endsection

@section('scripts')
    <!-- parallax js -->
    <script type="text/javascript">
        $(window).scroll(function () {
            if($(window).width()<768){
                $(".about-section").css("background-position","50% ");
            }
            else{$(".about-section").css("background-position","50% " + ($(this).scrollTop() / 2) + "px");}
        });

    </script>

    <!-- smooth scroll -->
    <script>
        $(document).ready(function(){
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>


    <script type="text/javascript">
        $(window).scroll(function() {
            setTimeout(function(){
                $(".slideanim-right").each(function(){
                    var pos = $(this).offset().top;

                    var winTop = $(window).scrollTop();
                    if (pos < winTop + 900) {
                        $(this).addClass("bounceInRight");
                    }
                });
            }, 200);
        });
        $(window).scroll(function() {
            setTimeout(function(){
                $(".slideanim-left").each(function(){
                    var pos = $(this).offset().top;

                    var winTop = $(window).scrollTop();
                    if (pos < winTop + 900) {
                        $(this).addClass("bounceInLeft");
                    }
                });
            }, 200);
        });
    </script>

@endsection
@section('content')

    <!-- main content -->
    <!-- header -->
    <a href="{{route('lang.switch',['locale' => 'ru'] )}}">ru</a>
    <a href="{{route('lang.switch',['locale' => 'en'] )}}">en</a>

    <h3>@lang('become-lawyer.variable')</h3>


    <div class="container" style="height: 100%;">
        <div class="row"  style="height: 100%;">
            <div class="about-section" style="height: 100%;">
                <center>
                    <h1 style="margin-bottom: 50px;">О Нас</h1>
                    <a class="about-btn" href="#about-iutlab">Подробнее...</a>
                    <!-- main content -->
                    <!-- header -->
                    <a href="{{route('lang.switch',['locale' => 'ru'] )}}">ru</a>
                    <a href="{{route('lang.switch',['locale' => 'en'] )}}">en</a>
                    <h3>@lang('become-lawyer.variable')</h3>
                </center>
            </div>
        </div>
        <div class="row" id="about-iutlab" style="height: 100%;">
            <div style="margin-top: 150px!important;">
                <div class="col-md-8"><p id="about-iutlab-paragraph" class="slideanim-left">
                        Центр инноваций и промышленной кооперации при Университете Инха в г. Ташкенте создан в целях расширения научно-исследовательского и инновационного потенциала университета, обеспечения коммерциализации результатов научных разработок и интеллектуальной деятельности, создания условий для развития профессиональных навыков у студентов университета, в том числе, путем их вовлечения в процесс разработки программных продуктов, трансфера инновационных продуктов и услуг как на внутренний, так и на зарубежный рынок. Центр также призван создать условия для выхода на новый уровень профессионального образования УИТ и способствовать формированию нового мышления и необходимых профессиональных навыков у студентов в тесном взаимодействии со специалистами-практиками в процессе научно-исследовательской и практической деятельности.</p>
                </div>
                <div class="col-md-4">
                    <img src="{{asset('images/img/about-us.png')}}" class="about-img slideanim-right">
                </div>
            </div>
        </div>
    </div>

@endsection
