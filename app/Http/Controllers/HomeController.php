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
        $page_name = "Dashbord";
        $breadcrumbs = "Dashbord";
        return view('home-SufeeAdmin', compact('page_name', 'breadcrumbs'));
//        return view('home-SufeeAdmin');
    }
}
