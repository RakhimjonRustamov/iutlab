@extends('layouts.admin')
@section('title', '| Edit Blog Post')
<!-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=5djyrupuqur8cg25c8vpgsqa92ur1l4hrqd8m4hxgbf08h2r"></script>
	<script>
	tinymce.init({
		selector:'textarea', 
		plugins: 'image imagetools link'
	});
	</script> -->
@section('stylesheets')

@endsection
@section('scripts')

@endsection

@section('content')
@include('partials._message')
 <div class="row">
 		{!! Form::model($post, ['route'=> ['posts.update', $post->id], 'method'=>'PUT',] )!!}
    	<div class="col-md-8">
    			{{ Form::label('title', 'Title:')}}
    			{{ Form::text('title', null, ['class'=>'form-control', 'required'=>''])}}
    			{{ Form::label('slug', 'Slug:') }}
				{{ Form::text('slug', null, array('class'=>'form-control', 'required'=>'', 'minlength'=>'5', 'maxlength'=>'100')) }}
			     <label name="featured_image" style="margin-top:10px"  > Upload New Image</label>
			     <input type="file" name="featured_image">
					{{ Form::label('body', 'Body:')}}
  				{{ Form::textarea('body', null, ['class'=>'form-control', 'required'=>''])}}
    	</div>
		
		<div class="col-md-4">
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
		</div>
	{!! Form::close()!!}
    </div>
@endsection
