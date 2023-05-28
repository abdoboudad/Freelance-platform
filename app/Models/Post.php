<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'work_name', 'category', 'description','user_id', 'created_at', 'updated_at'];
    public function users(){
        return $this->BelongsTo(User::class,'user_id');
    }
    public function comments(){
        return $this->hasMany(Comment::class,'post_id');
    }
}
