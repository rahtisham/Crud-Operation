<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminAddModel;

class AdminUpdateController extends Controller
{
    public function client_edit_View(Request $request , $id)
    {
   
        $clientEditView = AdminAddModel::where('client_id' , $id)->first();
        return view('Admin.client-edit-view' , ['clientEditView' => $clientEditView]);
      
    }

    public function Update_client_listing(Request $request , $id)
    {
        dd($id);
    }
}
