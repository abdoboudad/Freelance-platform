<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\User;
use App\Notifications\CreatePost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Post::create([
            'work_name'=>$request->work_name,
            'user_id'=>Auth::user()->id,
            'category'=>$request->category,
            'description'=>$request->description,
        ]);
        $user = User::find(auth()->user()->id);
        Notification::send($user,new CreatePost($request->work_name));
        return redirect()->back()->with('success','Post has been posted');
    }

    /**
     * Display the specified resource.
     */
    public function show($post)
    {
        $post = Post::where('work_name',$post)->first();
        // if($post->comments[0]->id){
        //     $test = DB::table('notifications')->where('notifiable_id',Auth::user()->id)->pluck('notifiable_id');
        //     if($test){
        //         $getID = DB::table('notifications')->where('data->title',$post->work_name)->pluck('id');
        //         DB::table('notifications')->where('id',$getID)->update(['read_at'=>now()]);
        //     }
        // }
        
        
        
        return view('home.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
    public function service(){
        $posts = Post::orderBy('created_at','desc')->get();
        return view('home.service',compact('posts'));
    }
    public function myrequests(){
        return view('home.myrequest');
    }
    public function chatrom(){
        $msgs = Chat::all();
        return view('home.chatrom',compact('msgs'));
    }

}
