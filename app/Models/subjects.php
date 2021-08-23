<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subjects extends Model
{
    use HasFactory;


    protected $table = 'subjects';
    protected $primaryKey = 'subject_id';

    protected $fillable = ['subject_id' , 'classID' , 'subject'];

}
