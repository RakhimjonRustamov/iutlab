@extends('layouts.admin')
@section('title', '| All Posts')
@section('content')
{{--<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=5djyrupuqur8cg25c8vpgsqa92ur1l4hrqd8m4hxgbf08h2r"></script>
	<script>
	tinymce.init({
		selector:'textarea', 
		plugins: 'link',
		menubar:false
	});
	</script> --}}
@include('partials._message')
<div class="row">
	<div class="col-md-10">
		<h1 align="center">All Posts</h1>
	</div>
	<div class="col-md-2">
		<a href="{{route('posts.create')}}" class="btn btn-success btn-block">Create New Post</a>
	</div>
</div>
<div class="row">
 	<div class="col-md-10 col-md-offset-1">
 		<table class="table">
 			<thead>
 				<th>#</th>
 				<th>Title</th>
 				<th>Body</th>
 				<th>Craeted At</th>
 				<th></th>
 				<th></th>
 			</thead>

 			<tbody>
 				@foreach($posts as $post)
					<tr>
					<th>{{ $post->id}}</th>
					<td>{{ strip_tags($post->title)}}</td>
					<td>{{ substr(strip_tags($post->body), 0, 50)}}{{ strlen(strip_tags($post->body)) >50 ? "...":""}}</td>
					<td>{{ date('M j, Y H:ia',strtotime($post->created_at))}}</td>
					<td>
					{{ Form::open(['route'=>['posts.destroy', $post->id], 'method'=>'delete' ])}}
					{{ Form::submit('Delete', ['class'=>'btn btn-danger mybtn'])}}		
					{{ Form::close()}}	
					<button type="button" class="btn btn-info mybtn " data-toggle="modal" data-target="#{{ $post->id }}">Edit</button>
  <!-- Modal -->
  <div class="modal fade" id="{{ $post->id }}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update The Post</h4>
        </div>
        <div class="modal-body">
          {!! Form::model($post, ['route'=> ['posts.update', $post->id], 'method'=>'PUT', 'files'=>true])!!}
    			{{ Form::label('title', 'Title:')}}
    			{{ Form::text('title', null, ['class'=>'form-control'])}}
    			{{ Form::label('slug', 'Slug:') }}
				{{ Form::text('slug', null, array('class'=>'form-control', 'required'=>'', 'minlength'=>'5', 'maxlength'=>'100')) }}
				 <label name="featured_image" style="margin-top:10px"> Upload New Image</label>
							 	<input type="file" name="featured_image">
			    <img src="{{ asset('images/img/blog/'. $post->image)}}" height="60" width="80"/>
    			<p>{{ Form::label('body', 'Body:')}}</p>
  				{{ Form::textarea('body', null, ['class'=>'form-control'])}}
    	
	
			<div class="well" id="bar">
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($post->created_at))}}</dd>
				</dl>
				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($post->updated_at))}}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-12">
					{{ Form::submit('Save Changes', ['class'=>'btn btn-success btn-block'])}}  
					</div>
				</div>
			
			</div>
{!! Form::close()!!}
        </div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
					</div>
      </div>
    </div>
  </div>
					</td>
					</tr>
				@endforeach
 			</tbody>
 		</table>
 		<div class="text-center">
 			{!! $posts->links()!!}
 		</div>
 	</div>
</div>
@endsection