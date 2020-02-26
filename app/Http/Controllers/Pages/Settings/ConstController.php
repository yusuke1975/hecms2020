<?php

namespace App\Http\Controllers\Pages\Settings;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ConstController extends Controller
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
        $page_name = "Const";
        $breadcrumbs = "Settings > Const";

        /* get .env file */
        $env_text = file_get_contents(__DIR__ . '/../../../../../.env');
//        $env_text = $env_text[0];
        $ary_env_tmp = explode("\n",$env_text);

        $ary_env['env'] = array();
        foreach ($ary_env_tmp as $val){
            if(strlen($val) > 0 && substr($val, 0, 1) !== "#"){
                $strcnt = strpos( $val, "=");
                $ary_env['env'][substr($val, 0, $strcnt)] = substr($val, $strcnt + 1);
            }
        }
        return view('pages.settings.const', compact('page_name', 'breadcrumbs', 'ary_env'));
    }
}
