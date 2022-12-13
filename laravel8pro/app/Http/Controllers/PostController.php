<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getAllPost(){
        $post=DB::table('posts')->get();
        return view('posts',compact('post'));
    }

    public function addPost(){
        return view('add-post');
    }

    public function addPostSubmit(Request $request){
        DB::table('posts')->insert([
            'title'=>$request->title,
            'body'=>$request->body
        ]);
        return back()->with('post_Created','Post has Benn Created Succesfully');
    }
    public function getPostByid($id){
        $postdata=DB::table('posts')->where('id',$id)->first();
        return view('single-post',compact('postdata'));
    }

    public function deletePost($id){
        DB::table('posts')->where('id',$id)->delete();
        return back()->with('post_deleted','Post Has Been Deleted');
    }

    public function editPost($id){
        $postupdate=DB::table('posts')->where('id',$id)->first();
        return view('edit_view',compact('postupdate'));
    }

    public function UpdatePost(Request $request){
        DB::table('posts')->where('id',$request->id)->update([
            'title'=>$request->title,
            'body'=>$request->body
        ]);
        return back()->with('post_updated','Post has been Updated Succusfully');
    }

    public function innerJoinCaluse(){
        $request=DB::table('users')
        ->join('posts','users.id','=','posts.user_id')
        ->select('users.name','posts.title','posts.body')
        ->get();
        return $request;
    }
}
