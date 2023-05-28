<?php

namespace App\Http\Livewire;

use App\Models\Chat as ModelsChat;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Chat extends Component
{
    public $msgtext;
    public $msgs;
    public function render()
    {
        $test = ModelsChat::all();
        return view('livewire.chat',compact('test'));
    }
    
    public function sendMessage(){
        ModelsChat::create([
            'chat_id'=>Auth::user()->id,
            'message'=>$this->msgtext,
        ]);
    }
}
