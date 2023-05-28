<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'user_id', 'about', 'skills', 'pathprofile' , 'path','status', 'created_at', 'updated_at'];
}
