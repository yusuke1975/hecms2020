<?php

namespace App\Http\Controllers\Pages\Settings;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class GeneralController extends Controller
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
        $page_name = "General";
        $breadcrumbs = "Settings > General";
        return view('pages.settings.general', compact('page_name', 'breadcrumbs'));
    }
}
