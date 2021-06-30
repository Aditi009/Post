<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $post=Post::OrderBy('id','desc')->get();
        return view('home')->with('posts',$post);
    }

    public function post()
    {
        return view('post');
    }
    public function addpost(Request $req)
    {
        $post=new Post();
        if ($req->hasFile('images')) {
            $file = $req->file('images');
            $destination_path = 'images/projects/';
            $filename = 'mypost'.rand(111111,999999) . '_' . $file->getClientOriginalName();
            $file->move($destination_path, $filename);
            $post->images = $filename;
        }
        $post->title=$req->title;
        $post->descr=$req->desc;
        $post->user_id=Auth::User()->id;
        $post->save();
        return redirect()->route('home')->with('msg','Your Post Created Successfully');
    }
      public function edit($id)
      {
          $post=Post::where('id',$id)->first();
          return view('editpost')->with('post',$post);
      }
      public function addedit(Request $req)
      {
        $post=Post::where('id',$req->id)->first();
        if ($req->hasFile('images')) {
            $file = $req->file('images');
            $destination_path = 'images/projects/';
            $filename = 'mypost'.rand(111111,999999) . '_' . $file->getClientOriginalName();
            $file->move($destination_path, $filename);
            $post->images = $filename;
        }
        $post->title=$req->title;
        $post->descr=$req->desc;
        $post->user_id=Auth::User()->id;
        $post->update();
        return redirect()->route('home')->with('msg','post edited successfully');
      }
      public function delete($id)
      {
          $post=Post::where('id',$id)->first();
          $post->delete();
          return redirect()->route('home')->with('msg','post deleted successfully');
      }

}
