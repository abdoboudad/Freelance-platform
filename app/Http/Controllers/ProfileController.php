<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use App\Traits\UploadImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    use UploadImageTrait;
    public function profile($name){
        $user = User::where('name',$name)->first();
        $str = $user->details[0]->path;
        $str = str_replace(['[', ']', '"'], '', $str); // Remove brackets and quotes
        $arr = explode(',', $str); // Split the string into an
        ///////
        $string = $user->details[0]->skills;
        $array = explode(",", $string);
        return view('home.profile.profile',compact('name','user','arr','array'));
    }
    public function editprofile($name){
        return view('home.profile.edit',compact('name'));
    }
    public function saveprofile(Request $request,$name){
        return $name;
    }
    public function skills(){
        $images = Profile::all();
        return view('home.skills',compact('images'));
    }
    public function saveskills(Request $request){
        $path =  $this->UploadImage($request,'skills');
        $pathprofile =  $this->UploadImageProfile($request,'users');

        Profile::create([
            'user_id'=>Auth::user()->id,
            'about'=>$request->about,
            'skills'=>$request->skills,
            'path'=>json_encode($path,true),
            'pathprofile'=>$pathprofile,
        ]);
        return redirect()->back();
    }
}
