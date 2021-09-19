<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classRoutine extends Model
{
    use HasFactory;

    protected $table = "class_routine";
    protected $primaryKey = "classRoutine_id";
 
    protected $fillable = ['classRoutine_id','class','subject','section','teacher','classRoom','days','statingHour','startingMinut','endingHour','endingMinut'];
}
