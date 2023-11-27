<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $user = Auth::user();
        $home = 'home';
        //dd($user->roles);
        if($user->hasRole('admin')){
            //do some stuff
            $home = 'admin.home';
        }

        else if($user->hasRole('user')){
            //do some user stuff
            $home = 'user.home';
        }

        return view($home);
        //havent done this before!

        //return redirect()->route($home);
    }
}
