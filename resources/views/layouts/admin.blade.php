<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin</title>
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
</head>
<body  style="background-color:#e6e6ff;">
<div class="container-fluid">
    <div id="app">
       <nav class="navbar navbar-inverse ">
       <div class="container-fluid">
             <!-- LOGO -->
          <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#topNavBar">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </button>
                <a class="navbar-brand" href="{{ url('/')}}"> IUTLAB </a>
          </div>

              <!-- Items -->
        <div class="collapse navbar-collapse" id="topNavBar">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('admin')?"active":""}}" ><a href="{{ url('admin')}}">Admin</a>
                </li>
                  <li class="{{ Request::is('admin/blog')?"active":""}}" ><a href="{{ url('admin/blog')}}">Blog</a>
                  </li>

                   <li class="{{ Request::is('admin/posts')?"active":""}}" ><a href="{{ url('admin/posts')}}">Posts</a></li>

                <li class="{{ Request::is('admin/posts/create')?"active":""}}" ><a href="{{ url('admin/posts/create')}}">Add New Post</a></li>

            </ul>

                <ul class="nav navbar-nav navbar-right">
                <li class="#">
                    <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                    </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                     </form>
                </li>
                </ul>
        </div>
       </div>
   </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
     <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   
    </div>
</body>
</html>
