<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classRoom extends Model
{
    use HasFactory;
    protected $table = 'class_room';
    protected $primaryKey = 'classRoom_id';

    protected $fillable = ['classRoom_id' , 'classRoom' ];
}
