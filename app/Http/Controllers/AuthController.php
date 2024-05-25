<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class AuthController extends Controller
{
    public function registerPage(){
        return view('pages.auth.register');
    }

    public function register(Request $request){
        $payload = $request->all();

        $payload = $request->validate([
            'username' => ['required'], // 'min:3'],
            'email' => ['required'], // 'min:1'],  // 'unique:user'
            'password' => ['required'], // 'min:4'],
            'no_hp' => ['required'], // 'min:11']
            'address' => ['nullable']
        ]);

        $user = User::create($payload);

        if($user){
            return view("pages.auth.login", [
                "payload" => $payload
            ]);
        }
    }

    public function loginPage(){
        return view('pages.auth.login', [
            "payload" => null
        ]);
    }

    public function login(Request $request){
        $user = User::getByEmail($request->email);
        
        if($user == null){
            return redirect()->back()->with('error', "User not found!!");
        }
        
        if(!Hash::check($request->password, $user->password)){
            return redirect()->back()->with('error', "password is wrong!!");
        }
        
        $request->session()->regenerate();
        $request->session()->put('isLoggged', true);
        $request->session()->put('userId', $user->id);
        $request->session()->put('username', $user->username);
        $request->session()->put('role', $user->role_name);

        if($user->role_name == "admin"){
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('member.profile');
        }

    }

    public function logout(Request $request){
        // session()->forget('isLoggged');
        // session()->forget('userId');
        // session()->forget('username');
        // session()->forget('role');

        session()->flush();

        return redirect()->route('auth.login');
    }
}
