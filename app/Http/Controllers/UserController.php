<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;


class UserController extends Controller
{
    private $validateUser;

    public function __construct(){
        $this->validateUser = [
            'username' => ['required'], // 'min:3'],
            'email' => ['required'], // 'min:1'],  // 'unique:user'
            'no_hp' => ['required'], // 'min:11']
            'address' => ['nullable']
        ];
    }

    public function users(){
        return view('pages.admin.users.index',[
            'users' => User::getList(),
            'msg' => ''
        ]);
    }
    public function showUser(string $mode, int $id=null){
        
        return view('pages.admin.users.form', [
            'user' => User::getById($id),
            'roles' => Role::getList(),
            'mode' => $mode
        ]);
    }
    public function storeUser(Request $request){
        $payload = $request->all();
        
        $payload = $request->validate($this->validateUser);

        $user = User::create($payload);

        if($user){
            return view('pages.admin.users.index',[
                'users' => User::getList(),
                'msg' => "user added successfully"
            ]);
        }
        
    }
    public function updateUser(Request $request, int $id=null){
        $payload = $request->all();
        $payload = $request->validate($this->validateUser);

        $user = User::update_($payload, $id);
        
        return view('pages.admin.users.index',[
            'users' => User::getList(),
            'msg' => "User Edited successfully"
        ]);
    }
    public function destroyUser(int $id){
        $user = User::delete_($id);
        
        return view('pages.admin.users.index',[
            'users' => User::getList(),
            'msg' => "role deleted successfully"
        ]);
    }
}
