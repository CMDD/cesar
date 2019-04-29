<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function create(Request $request){
        return 200;
    }

    public function autenticar(Request $request){
      if (Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])) {
        return view('admin.index');
      }
      return back();
    }
    public function logout(){
      Auth()->logout();
      return  Redirect::to('/');
    }

}
