<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


    function create() {
        $roles = Role::all();
        return view('pages.register',['roles' => $roles ]);
    }

    function store( Request $request ) {

        User::create( $request->all() );
        return view('pages.thankyou');

    }

    function login(){

        return view('pages.login');
    }

    function postLogin(Request $request){

        /* dd($request->all);*/

        if(Auth::attempt($request->only('user_name','password'))){

             return redirect()->intended(route('profile'));
         }

         return redirect()->route('login')->with('message','<div class="alert alert-danger">Login Failed</div>');
    }

    function profile(){

        return view('pages.profile');
    }

    

    function logout(){

        Auth::logout();
        return redirect()->route('login');
    }



}
