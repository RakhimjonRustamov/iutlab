@extends('layouts.admin')
@section('title', "| $post->title")
@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
	<img src="{{ asset('images/img/blog/'. $post->image)}}" height="400" width="750"/>
		<h1>{{ strip_tags($post->title)}}</h1>
		<p class="lead">{{ strip_tags($post->body)}}</p>
	</div>
</div>
@endsection