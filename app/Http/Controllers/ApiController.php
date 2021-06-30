<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Post;
use App\Models\User;
use Auth;
class ApiController extends Controller
{
    public function index()
    {   



        $post=Post::OrderBy('id','desc')->get();
        return view('home')->with('posts',$post);
    }

    public function post()
    {
        $post= Post::all();
        if($post){
            return response()->json(["success"=>1,"message"=>"Post fetched successfully","data"=>$post],200);
        }else{
            return response()->json(["success"=>0,"message"=>"No post found","data"=>[]],200);
        }
        
    }
    public function addpost(Request $req)
    {

        $validator = Validator::make($req->all(),[
            'title'=>'required|min:1',
            'desc'=>'required',
            'images'=>'required | file',
           
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(),202);
        }

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
        
        if($post->save()){
            return response()->json(["success"=>1,"message"=>"Post added successfully","data"=>$post],200);
        }else{
            return response()->json(["sucess"=>0,"message"=>"Failed to add post","data"=>[]],200);
        }
    }
      public function edit($id)
      {
          $post=Post::where('id',$id)->first();
          return view('editpost')->with('post',$post);
      }
      public function addedit(Request $req)
      {
          
        $validator = Validator::make($req->all(),[
            'id'=>'required|min:1', 
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(),202);
        }
        $post=Post::where('id',$req->id)->where('user_id',Auth::User()->id)->first();
        if(!$post)
        {
            return response()->json(["sucess"=>0,"message"=>"No Post Associated With This Id","data"=>[]],200);

        }
        if ($req->hasFile('images')) {
            $file = $req->file('images');
            $destination_path = 'images/projects/';
            $filename = 'mypost'.rand(111111,999999) . '_' . $file->getClientOriginalName();
            $file->move($destination_path, $filename);
            $post->images = $filename;
        }
        $post->title=$req->title ? $req->title : $post->title;
        $post->descr=$req->desc?$req->desc:$post->descr;
       
     
        if($post->update()){
            return response()->json(["success"=>1,"message"=>"Post updated successfully","data"=>$post],200);
        }else{
            return response()->json(["sucess"=>0,"message"=>"Failed to update post","data"=>[]],200);
        }
      }
      public function delete($id)
      {
        
        $post=Post::where('id',$id)->where('user_id',Auth::User()->id)->first();//yha bhi auth user id lga dena 
        if(!$post)
        {
            return response()->json(["sucess"=>0,"message"=>"You do not have any Post Associated With This Id","data"=>[]],200);

        }  
          
          if($post->delete()){
            return response()->json(["success"=>1,"message"=>"Post deleted successfully"],200);
        }else{
            return response()->json(["sucess"=>0,"message"=>"Failed to delete post"],200);
        }
      }

      public function login(Request $req)
      {
             
        $validator = Validator::make($req->all(),[
            'email'=>'required|email', 
            'password'=>'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(),202);
        }

        $user=User::where('email',$req->email)->first();
        if(!$user)
        {
            return response()->json(["sucess"=>0,"message"=>"Please Provide Valid Email"],200);
        }

        $token = $user->createToken('bargainaride')->accessToken;
        return response()->json(["sucess"=>1,"message"=>"Successfully Logged In",'token'=>$token],200);

      }

}
