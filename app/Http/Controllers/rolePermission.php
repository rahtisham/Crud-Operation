<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class rolePermission extends Controller
{
    public function Roles()
    {
        $roles = Role::all();
        return view('admin.roles' , compact('roles'));
    }

    public function Permission()
    {
        $permissions = Permission::all();
        return view('admin.permission' , compact('permissions'));
    }

    // Roles page view to add new role to assign to anyone
    // View Function!

    public function Roles_create(Request $request)
    {

        $this->validate($request,[ 
            'role' => 'required', 
        ]);
        // End of validation

        $role = new Role([

            'name' => $request->get('role'),

        ]);
        $role->save();
        // Inserted query
        
        return back()->with('success' , 'Role Has Beeb Created!');

    } 
    // Inserted function of Roles!
    // add role for role table of database...

    public function Permission_create(Request $request)
    {

        $this->validate($request,[ 
            'permission' => 'required', 
        ]);
        // End of validation

        $permission = new Permission([

            'name' => $request->get('permission'),

        ]);
        $permission->save();
        // Inserted query
        
        return back()->with('success' , 'Permission Has Beeb Created!');

    } 
    // Inserted function of Roles!
    // add role for role table of database...

}
