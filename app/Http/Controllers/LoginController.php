<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logincontroller extends Controller

{
    public function showLogin()
   {
 
      return view('login');
   }
   public function login(){
     return redirect()->route('dashboard');
   }
}

