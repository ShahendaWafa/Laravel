<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Posts extends Controller
{
    public function home(){
        return view('home');
    }
    public function allposts(){
        $p = Post::all();
        return view('allposts',['posts'=>$p]);
    }

    public function create(){
        return view('create');
    }
    public function submit(){
        request()->validate([
            "title"=>"required"
            ]);
        $title = request("title");
        $body = request("body");
        $post = new post;
        $post->title = $title;
        $post->body = $body;
        $post->save();
        return redirect('/create');
    }

    public function contact(){
        $arr = [ "Email"=>"shahenda@gmail.com", "Phone"=>"+20101021221", "Address"=>"13th River st. Cairo"];
        return view('contact', compact('arr'));
    }

    public function show($post_id){
        $post_data = Post::findOrFail($post_id);
        return view('show',["post"=>$post_data]);
    }

    public function edit($post_id){
        $post_data = Post::findOrFail($post_id);
        return view('edit',["post"=>$post_data]);
    }

    public function update($post_id){
        $post = Post::findOrFail($post_id);
        $post->title = request('title');
        $post->body = request('body');
        $post->save();
        return redirect ("show/".$post->id);
    }

    public function delete($post_id){
        $post = Post::findOrFail($post_id);
        $post->delete($post->id);

        return redirect ("allposts");
    }
}
