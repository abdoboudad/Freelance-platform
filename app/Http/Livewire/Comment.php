<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comment as com;
use App\Models\User;
use App\Notifications\clientmsg;
use Illuminate\Support\Facades\Notification;

class Comment extends Component
{ 
    public $post;
    public $postid;
    public $msg;
    
    public function render()
    {
        return view('livewire.comment');
    }
    public function comment(){
        $come = com::create([
            'post_id'=>$this->postid,
            'user_id'=>auth()->user()->id,
            'comment'=>$this->msg,
        ]);
        if($come->getpost->user_id === auth()->user()->id){
            $freelancers = com::where('user_id','!=',auth()->user()->id)->where('post_id',$this->postid)->get()->pluck('user_id');
            $users = User::whereIn('id',$freelancers)->get();
            $title = $come->getpost->work_name;
            $img = $come->getpost->users->details[0]->pathprofile;
            Notification::send($users,new clientmsg($this->postid,$title,$img));
        };
    }
}
