<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('layout.admin.login');
    }

    public function login(Request $request)
    {
        $admin = [
            'username' => $request->username,
            'password' => $request->password,
            'role_id' => 1,
        ];

        $user = [
            'username' => $request->username,
            'password' => $request->password,
            'role_id' => 2,
        ];

        if (!Auth::attempt($user) && !Auth::attempt($admin)) {
            return redirect()->route('login')->with('login-error', 'Tài khoản hoặc mật khẩu không đúng!');
        } else if(Auth::attempt($admin)) {
            return redirect()->route('admin.dashboard');
        } else if (Auth::attempt($user)){
            return redirect()->route('index');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function register(){
        return view('layout.admin.register');
    }

    public function postRegister(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->address = $request->address;
        $user->role_id = 2;
        $user->gender = $request->gender;
        $user->birthday = $request->birthday;
        $this->uploadImage($user, $request);
        $user->save();
        return redirect()->route('admin.login');
    }
}
