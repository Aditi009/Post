@extends('layouts.app')

@section('nav')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<ul class="navbar-nav items mr-5">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/">Home</a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="post">Post</a>

                        </li>
                       
                    </ul>
                    <!-- Navbar Toggler -->
                    <ul class="navbar-nav toggle">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                                <i class="fas fa-bars toggle-icon m-0"></i>
                            </a>
                        </li>
                    </ul>
@endsection
@section('content')
@php
use App\Models\User;
                       
@endphp
<div class="container" style="margin-top:40px;margin-bottom:50px">
    <div class="row justify-content-center">
      @foreach($posts as $post)
        <div class="col-md-8">
           <div class="col-md-12">
              <div class="row p-2">
              <div class="col-md-10" style="display:flex">
                    <div>
                        <img src="{{asset('images/projects')}}/{{$post->images}}" style="height:50px;width:50px;border-radius:50%">
                    </div>  
                    <div style="margin-left:20px;margin-top:1px;">
                        <h5>
                        @php
                        $u=User::where('id',$post->user_id)->first();
                        if($u){
                            echo $u->name;
                        }
                        @endphp
                        
                        </h5>
                        <p>{{$post->title}}</p>
                    </div>
                    </div>
                    <div class="col-md-2">
                    @if($post->user_id==Auth::User()->id)
                    <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="edit/{{$post->id}}">edit</a>
    <a class="dropdown-item" href="delete/{{$post->id}}">Delete</a>
  
  </div>
</div>
@endif
</div>

              </div>
            </div>
            <div class="col-md-12">
            <p>{{$post->descr}}</p>
            </div>
            <div class="card col-md-12">
           
              <img src="{{asset('images/projects')}}/{{$post->images}}" >
              <div class="row p-2 ml-2" id="icon">
              
               <div>
               <i class="fa fa-comment" style="font-size:20px;"  aria-hidden="true"></i>
               </div>
               <div class="ml-2">
             
               <i class="fa fa-heart" style="font-size:20px;" aria-hidden="true"></i>
                </div>
            </div>
            </div>
           
        </div>
        @endforeach
    </div>
</div>

@endsection
