@extends('layouts.admin')
<style>
    #mybtn1 li{
        display:inline-block;
    }
</style>
@section('content')
    @include('partials._message')
  <div class="row">
       <div class="col-md-8">
        @foreach($projects as $project)
                  <div class="row" style="background-color:white;" >
                   <div style="margin-left:10px;height:250px; padding:15px; ">
                     <div class="col-md-4 col-sm-4">
                       <img src="{{ asset('images/img/work/'. $project->image)}}" height="210px" width="200px"/>
                     </div>
                       <div class="col-md-8 col-sm-8" style="height: 210px;">
                        <ul id="mybtn1" style="float: right; width: 200px!important; vertical-align: middle!important;">
                       <li>  {{ Form::open(['route'=>['projects.destroy', $project->id], 'method'=>'delete' ])}}
                        {{ Form::submit('Delete', ['class'=>'btn btn-danger mybtn '])}}
                        {{ Form::close()}}</li>
                       <li><a href="{{$project->link}}" class="btn btn-primary mybtn">View</a>
                            </li>
                        </ul>
                           {{$project->definition}}
                       </div>
                   </div>
                  </div>
            <br>
        @endforeach
       </div>
        <div class="col-md-4">
            <div>
            <h1 align="center">Create New Project</h1>
            <form action="{{ route('projects.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <label>Link:</label>
                <input type="text" name="link" class="form-control">
                <label>Upload Featured Image:</label>
                <input type="file" name="featured_image" class="form-control">
                <label>Definition Project:</label>
                <textarea name="definition" class="form-control" placeholder="Enter Project Definition"></textarea>
                <button type="submit" row="10" class="btn btn-success btn-block">Save Project</button>
            </form>
            </div>
        </div>
    </div>
@endsection
