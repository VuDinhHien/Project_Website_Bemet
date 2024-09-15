<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
    public function login(){
        return view('account.login');
    }

    public function check_login(){
       
    }

    public function register(){
        return view('account.register');  
    }

    public function check_register(Request $req){
        $req->validate([
            'name' => 'required|min:6|max:100',
            'email' => 'required|email|min:6|max:100|unique:customers',
            'password' => 'required|min:4|max:100',
            'confirm_password' =>'required|same:password',
        ], [
            'name.required' => 'Họ tên không được để trống',
            'name.min' => 'Họ tên tối thiểu là 6 ký tự'
        ]);

        $data  = $req->only('name', 'email', 'phone', 'address', 'gender');

        $data['password'] = bcrypt($req->password);

        dd($data);
       
    }

    public function change_password(){
        return view('account.change_password');
    }

    public function check_change_password(){
       
    }

    public function forgot_password(){
        return view('account.forgot_password');
       
    }

    public function check_forgot_password(){
       
    }

    public function profile(){
        return view('account.profile');
    }
    public function check_profile(){
       
    }
    public function reset_password(){
       return view('account.reset_password');
    }

    public function check_reset_password(){
       
    }
}
