<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registered extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $fillable = ['id' , 'role' , 'name' , 'category' , 'contact' , 'address' , 'cnic' , 'gender', 'DOB' , 'DOJ' , 'status' , 'email' , 'password','profile_photo_path'];
    
}
