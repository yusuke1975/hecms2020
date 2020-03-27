<?php

namespace App\Http\Controllers\Pages\Sample\Wysiwyg;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class JoditController extends Controller
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
        $page_name = "Jodit";
        $breadcrumbs = "Home > Smaple > Wysiwyg";

        return view('pages.sample.wysiwyg.jodit', compact('page_name', 'breadcrumbs'));
    }
}
