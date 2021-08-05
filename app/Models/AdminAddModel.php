<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminAddModel extends Model
{
    use HasFactory;

    protected $table = 'clients';
    protected $primaryKey = 'client_id';
  
    // The attributes that are mass assignable

    protected $fillable = ['client_id' , 'client_name' , 'client_email' , 'client_contact_number' , 'client_address' , 'client_project_name' , 'client_country' , 'client_city' , 'client_infromation' , 'client_idCard'];

}
