@extends('layouts.app')
@section('title', 'Blog')
@section('stylesheets')
    <style type="text/css">#nav{margin-right:100px}</style>
    <!-- <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans'> -->
    <link rel="stylesheet" href="{{asset('css/blog-style.css')}}">
    <style>
        .example-slider .fnc-slide-1 .fnc-slide__inner,
        .example-slider .fnc-slide-1 .fnc-slide__mask-inner {
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("images/img/blog/{{$posts[0]->image}}");
        }
        .example-slider .fnc-slide-2 .fnc-slide__inner,
        .example-slider .fnc-slide-2 .fnc-slide__mask-inner {
            background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("images/img/blog/{{$posts[1]->image}}");
        }
        .example-slider .fnc-slide-3 .fnc-slide__inner,
        .example-slider .fnc-slide-3 .fnc-slide__mask-inner {
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("images/img/blog/{{$posts[2]->image}}");
        }
        .example-slider .fnc-slide-4 .fnc-slide__inner,
        .example-slider .fnc-slide-4 .fnc-slide__mask-inner {
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("images/img/blog/{{$posts[3]->image}}");
        }
    </style>
@endsection
@section('scripts')


@endsection
@section('content')
    <div class="demo-cont">
        <!-- slider start -->
        <div class="fnc-slider example-slider">
            <div class="fnc-slider__slides">
                <!-- slide start -->
                <div class="fnc-slide m--blend-green m--active-slide">
                    <div class="fnc-slide__inner">
                        <div class="fnc-slide__mask">
                            <div class="fnc-slide__mask-inner"></div>
                        </div>
                        <div class="fnc-slide__content">
                            <h2 class="fnc-slide__heading">
                                <div class="fnc-slide__heading-line">
                                    {{$posts[0]->title}}
                                </div>
                            </h2>
                            <p class="fnc-slide__paragraph">{{$posts[0]->body}}</div>
                    </div>

                </div>
                <!-- slide end -->
                <!-- slide start -->
                <div class="fnc-slide m--blend-dark">
                    <div class="fnc-slide__inner">
                        <div class="fnc-slide__mask">
                            <div class="fnc-slide__mask-inner"></div>
                        </div>

                        <div class="fnc-slide__content">
                            <h2 class="fnc-slide__heading">
                                <div class="fnc-slide__heading-line">
                                    {{$posts[1]->title}}
                                </div>
                            </h2>
                            <p class="fnc-slide__paragraph">{{$posts[1]->body}}</div>

                    </div>
                </div>
                <!-- slide end -->
                <!-- slide start -->
                <div class="fnc-slide m--blend-red">
                    <div class="fnc-slide__inner">
                        <div class="fnc-slide__mask">
                            <div class="fnc-slide__mask-inner"></div>
                        </div>
                        <div class="fnc-slide__content">
                            <h2 class="fnc-slide__heading">
                                <div class="fnc-slide__heading-line">
                                    {{$posts[2]->title}}
                                </div>
                            </h2>
                            <p class="fnc-slide__paragraph">{{$posts[2]->body}}</div>
                    </div>
                </div>
                <!-- slide end -->
                <!-- slide start -->
                <div class="fnc-slide m--blend-blue">
                    <div class="fnc-slide__inner">
                        <div class="fnc-slide__mask">
                            <div class="fnc-slide__mask-inner"></div>
                        </div>
                        <div class="fnc-slide__content">
                            <h2 class="fnc-slide__heading">
                                <div class="fnc-slide__heading-line">
                                    {{$posts[3]->title}}
                                </div>
                            </h2>
                            <p class="fnc-slide__paragraph">{{$posts[3]->body}}</div>
                    </div>
                </div>
                <!-- slide end -->
            </div>

            <div class="footer_credits">
                <button type="button" class="fnc-slide__action-btn">Credits
                    <span data-text="Credits">Credits</span>
                </button>
            </div>

            <nav class="fnc-nav">
                <div class="fnc-nav__bgs">
                    <div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
                    <div class="fnc-nav__bg m--navbg-dark"></div>
                    <div class="fnc-nav__bg m--navbg-red"></div>
                    <div class="fnc-nav__bg m--navbg-blue"></div>
                </div>
                <div class="fnc-nav__controls">
                    <button class="fnc-nav__control">
                        Lorem Ipsum-1
                        <span class="fnc-nav__control-progress"></span>
                    </button>
                    <button class="fnc-nav__control">
                        Lorem Ipsum-2
                        <span class="fnc-nav__control-progress"></span>
                    </button>
                    <button class="fnc-nav__control">
                        Lorem Ipsum-3
                        <span class="fnc-nav__control-progress"></span>
                    </button>
                    <button class="fnc-nav__control">
                        Lorem Ipsum-4
                        <span class="fnc-nav__control-progress"></span>
                    </button>
                </div>
            </nav>
        </div>
        <!-- slider end -->
        <div class="demo-cont__credits">
            <div class="demo-cont__credits-close"></div>
            <h2 class="demo-cont__credits-heading">СДЕЛАНО</h2>
            <h3 class="demo-cont__credits-name">программистами IUTLab</h3>
            <a href="http://iutlab.uz" target="_blank" class="demo-cont__credits-link">IUTLab.uz</a>
        </div>
    </div>

    </div>
    <script src="{{asset('js/blog.js')}}"></script>
@endsection