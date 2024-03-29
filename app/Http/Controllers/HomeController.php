<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
        return view('wiuc/index');
    }
    public function about()
    {
        return view('wiuc/about');
    }
    public function admin()
    {
        return view('/dashboard');
    }
    public function contact()
    {
        return view('wiuc/contact');
    }


}
