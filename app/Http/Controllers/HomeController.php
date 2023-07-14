<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        if(auth()->user()->role == 'admin' || auth()->user()->role == 'manager'){
            return redirect('/');
        }else {
            //return redirect('/after_register'); boleh gini pake rute
            return redirect('/');
        }
    }

    public function after()
    {
        return view('after_register');
    }

}
