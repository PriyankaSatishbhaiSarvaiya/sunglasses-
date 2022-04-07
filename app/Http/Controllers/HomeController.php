<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
     
        $role = Auth::user()->role;
        if($role=='Admin')
        {
       return view('admin.dashboard');
        }
        else{
            return view('frontend.index');

        }
        // return view('admin.dashboard');

    }
    public function fronthome()
    {
        
    }

    public function fronthome1()
    {
    
        
        return view('frontend.index');
    }


}
