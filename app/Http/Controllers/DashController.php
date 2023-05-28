<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;

class DashController extends Controller
{
    public function index(){
        $posts = Post::all();
        $users = User::all();
        $comments = Comment::all();
        return view('layouts.dashboard.details',compact('posts','users','comments'));
    }

    public function posts(){
        $posts = Post::orderBy('created_at','desc')->get();
        return view('layouts.dashboard.posts',compact('posts'));
    }
    public function deleteposts($id){
        Post::findorFail($id)->delete();
        return redirect()->back();
    }

    public function users(){
        $users = User::orderBy('created_at','desc')->get();
        return view('layouts.dashboard.users')->with('users',$users);
    }
    public function deleteusers($id){
        User::findorFail($id)->delete();
        return redirect()->back();
    }
    public function banned($id){
        $user = User::findorFail($id)->details[0];
        $user->status = 'banned';
        $user->save();
        return redirect()->back();
    }
    public function unbanned($id){
        $user = User::findorFail($id)->details[0];
        $user->status = '';
        $user->save();
        return redirect()->back();
    }

    public function comments(){
        $comments = Comment::orderBy('created_at','desc')->get();
        return view('layouts.dashboard.comments',compact('comments'));
    }
    public function reviews(){
        $posts = Post::orderBy('created_at','desc')->get();
        return view('layouts.dashboard.review',['posts'=>$posts]);
    }
    public function accepte($id){
        $user = Post::findorFail($id);
        $user->status = 'accepte';
        $user->save();
        return redirect()->back();
    }
    public function refuse($id){
        $user = Post::findorFail($id);
        $user->status = 'refuse';
        $user->save();
        return redirect()->back();
    }
}
