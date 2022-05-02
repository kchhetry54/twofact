<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   public function TwoFact()
   {
       $user = Auth::user();

       return view('front.TwoFactor', compact('user'));
   }
}