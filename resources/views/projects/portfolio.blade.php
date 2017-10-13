@extends('layouts.app')
@section('title', 'Projects')
@section('stylesheets')
    <style type="text/css">
        #works span{
            position: absolute;
            z-index: 2;
            left: 5px;
            letter-spacing: 2px;
            margin-top:15px;
            font-size: 20px;
            color: #000;
            background: #f1c40f;
            border-radius: 20px;
            padding: 5px 10px 5px 10px;
            font-weight: bold;
        }
    </style>
@endsection
@section('scripts')

@endsection
@section('content')
    <div id="content" class="">
        <div id="works-wrap">
            <div id="works">
                @foreach($projects as $project)
                <a class="work work1" href="http://{{ $project->link  }}" name="yuridik" data-id="1">
                    <span style="">{{$project->link}}</span>
                    <div class="work-overlay"></div>
                    <img alt="" src="{{asset('images/img/work/'. $project->image)}}"/>
                </a>
                @endforeach
            </div>
        </div>
    </div>

@endsection