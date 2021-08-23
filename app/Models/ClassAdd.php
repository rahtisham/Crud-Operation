<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassAdd extends Model
{
    use HasFactory;

    protected $table = 'class';
    protected $primaryKey = 'class_id';

    protected $fillable = ['class_id' , 'className'];


}
