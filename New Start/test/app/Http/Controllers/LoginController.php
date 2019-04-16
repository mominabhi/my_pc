<?php

namespace App\Http\Controllers;

use App\Play;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
session_start();
class LoginController extends Controller
{

    public function showLogin(){
        if(Session::has('user_email')) {

            return redirect()->route('datatable');
        }
        else{
            return view('login');
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $email=$request->email;
        $password=$request->password;
        $user=Play::where('email',$email)->where('password',$password)->first();
        $name=$user->name;
        if(isset($user))
        {
            Session::put('user_email',$email);
            Session::put('user_name',$name);
            return redirect()->route('datatable');
        }
        else{
            return redirect()->back()->with('error','Input Value Not valid');
        }
    }
    public function logout()
    {
      Session::forget('user_email');
      Session::flush();
      return redirect()->route('show.login');
    }
}
