<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
  public function Logout(Request $request){
    Auth::Logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();


    return redirect()->route('login');
  }
}
