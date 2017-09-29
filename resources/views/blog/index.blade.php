@extends('layouts.admin')
@section('title', "| All Blog Posts")
@section('content')
 	 <div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1 align="center">Blog</h1>
		@foreach($posts as $post)
				<div class="row">
					<div class="col-md-12">
						<h2>{{ strip_tags($post->title)}}</h2>
						<p> {{ strip_tags($post->body)}}</p>
						<a href="{{ route('blog.single', ['slug'=>$post->slug])}}" class="btn btn-success">Read More</a>
					</div>
				</div>
		@endforeach			
			</div>
	 </div>
	 <div class="text-center">
 			{!! $posts->links()!!}
 		</div>
@endsection