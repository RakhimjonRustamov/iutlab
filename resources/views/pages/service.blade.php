@extends('layouts.app')
@section('title', 'Services')
@section('stylesheets')
    <style type="text/css">
        .body-bg{
            -webkit-animation: Gradient 15s ease infinite;
            -moz-animation: Gradient 15s ease infinite;
            animation: Gradient 15s ease infinite;
            width: 100wh;
            height: 100%;
            color: #fff;
            background: linear-gradient(-45deg, #BBDEFB, #64B5F6, #2196F3, #1976D2, #283593);
            background-size: 400% 400%;
        }

        .service-block{
            box-shadow: 2px 2px 10px black;
            border-radius: 20px;
            background-color: rgba(255,255,255,0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            z-index: 3;
        }
        h3{font-weight: bold;color: #000}p{font-size: 16px;font-weight: bolder;color: #616161}
        .icons{font-size: 70px;padding: 20px;text-decoration: none!important; color: #212121;}
        .icons:hover{color: #f1c40f;}
    </style>
@endsection

@section('scripts')

@endsection

@section('content')
    <div class="body-bg">
    <style type="text/css">#nav{margin-right:100px}</style>

    <div class="container service-block">
        <div class="row" align="center">
            <div class="col-md-4">
                <div class="col-md-4 col-sm-4">
                    <a href="{{route('contact')}}" class="glyphicon glyphicon-globe icons"></a>
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3>WEB РАЗРАБОТКА</h3>
                    <p>Создание сайтов, порталов <br>и интернет магазинов</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-4 col-sm-4">
                    <a href="{{route('contact')}}" class="fa fa-android icons"></a>
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3>МОБИЛЬНАЯ РАЗРАБОТКА</h3>
                    <p>Создание приложения <br>на Android и iOS</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-4 col-sm-4">
                    <a href="{{route('contact')}}" class="fa fa-desktop icons"></a>
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3>РАЗРАБОТКА НА DESKTOP</h3>
                    <p>Создание приложения <br>на всех платформах Windows</p>
                </div>
            </div>
        </div>
        <div class="row" align="center">
            <div class="col-md-4">
                <div class="col-md-4 col-sm-4">
                    <a href="{{route('contact')}}" class="fa fa-rocket icons"></a>
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3>SEO & SMM</h3>
                    <p>Продвижение мобильных приложений и вебсайтов Подготовка статей</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-4 col-sm-4">
                    <a href="{{route('contact')}}" class="fa fa-leaf icons"></a>
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3>ДИЗАЙН</h3>
                    <p>Разработка дизайна вебсайтов, порталов, приложений, фирменный стиль компании</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-4 col-sm-4">
                    <a href="{{route('contact')}}" class="fa fa-compress icons"></a>
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3>ПРОЧЕЕ</h3>
                    <p>Поддержка стартапов <br>Организация тренингов и семинаров</p>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection