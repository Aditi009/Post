@extends('layouts.app')
@section('nav')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<ul class="navbar-nav items mr-5">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/">Home</a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="post" style="color:blue">Post</a>

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

<div class="container" style="margin-top:40px;margin-bottom:50px">
    <div class="row justify-content-center">

        <div class="col-md-8">
          
            
           <form action="addpost" method="post" enctype="multipart/form-data">
           <div class="form-input mt-2" style="display:flex;align-item:center;justify-content:center">
              <label for="file-ip-1">Add Image</label>
              <input type="file" name="images" id="file-ip-1" accept="image/*" onchange="showPreview(event)">
              
           </div>
           @csrf
            <div class="card col-md-12 mt-5" style="display:flex;align-item:center;justify-content:center">
              <div class="preview">
              <img src="" id="file-ip-1-preview"  style="width:400px;display:flex;align-item:center;justify-content:center">
              <input value="{{ Auth::user()->id }}" name="u_id" hidden>
              <input type="text" name="title" class="form-control mt-1" placeholder="Your Tags">
              <textarea name="desc" class="form-control mt-2" id="">Your Description About Post</textarea>
              <button type="submit" class="btn btn-primary mt-2 mb-2" >Upload Post</button> 

              </div>
            </div>
            </form>
            
           
        </div>
    </div>
</div>
@endsection