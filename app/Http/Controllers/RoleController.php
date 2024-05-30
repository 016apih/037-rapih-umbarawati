<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    private $validateRole;

    public function __construct(){
        $this->validateRole = [ 'name' => ['required', 'min:3'] ];
    }
    
    public function roles(){
        return view('pages.admin.roles.index',[
            'roles' => Role::getList(),
            'msg' => ''
        ]);
    }
    public function showRole(string $mode, int $id=null){

        return view('pages.admin.roles.form', [
            'role' => Role::getById($id),
            'mode' => $mode
        ]);
    }
    public function storeRole(Request $request){
        $payload = $request->all();

        $payload = $request->validate($this->validateRole);

        $role = Role::create($payload);
        
        return view('pages.admin.roles.index',[
            'roles' => Role::getList(),
            'msg' => "role added successfully"
        ]);
    }
    public function updateRole(Request $request, int $id=null){
        $payload = $request->all();
        $payload = $request->validate($this->validateRole);

        $role = Role::update_($payload, $id);
        
        return view('pages.admin.roles.index',[
            'roles' => Role::getList(),
            'msg' => "role Edited successfully"
        ]);
    }
    public function destroyRole(int $id){
        $role = Role::delete_($id);
        
        return view('pages.admin.roles.index',[
            'roles' => Role::getList(),
            'msg' => "role deleted successfully"
        ]);
    }
}
