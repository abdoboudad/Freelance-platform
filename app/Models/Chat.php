<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = ['chat_id','message'];
    use HasFactory;

    public function getusers(){
        return $this->belongsTo(User::class,'chat_id');
    }
}
