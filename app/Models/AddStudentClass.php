<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddStudentClass extends Model
{
    use HasFactory;
    
    protected $table = 'student_class';
    protected $primaryKey = 'stduentClass_id';
    
    protected $fillable = ['stduentClass_id' , 'studentId' , 'studentName' , 'studentSection' , 'class' , 'year' , 'status'];
}
