<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $req){
        $data = $req->validate([
            'name'=> 'required',
            'email'=>'required | email',
            'password'=>'required | confirmed'
        ]);
        $user=User::create($data);
        if($user){
            return redirect()->route('login');
        }
    }
    public function login(Request $req){
        $credentials = $req->validate([
            'email'=>'required | email',
            'password'=>'required'
        ]);
        if(Auth::attempt($credentials)){
            return redirect()->route('index');
        }
    }
    public function logout(){
      Auth::logout();
      return view('login');
    }
}
