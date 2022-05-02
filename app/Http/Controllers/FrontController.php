<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function home()
    {
        $user = Auth::user();
        if(!auth()->user()) {
            return redirect('/login')
                ->with('error', 'You need to log in first!');
        }
        
        return view('front.home', compact('user'));
    }
   
}