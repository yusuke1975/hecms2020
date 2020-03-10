<?php

namespace App\Http\Controllers\Pages\Settings;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Pgsql\MConst;
use Illuminate\Support\Facades\DB;

class Const2Controller extends Controller
{
    protected $connection = 'pgsql';
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
        $const_env = "env";
        $tmp_cnt = 1;

        $summary = MConst::getConstAll();

        $env_text = file_get_contents(__DIR__ . '/../../../../../.env');
        // $env_text = $env_text[0];
        // $ary_env_tmp = explode("\n",$env_text);

        if( $summary > 0 ) {

        }else{ // m_constにレコードがない場合は登録ページを表示

            $ary_env_tmp = explode("\n",$env_text);

            $ary_env[$const_env] = array();
            foreach ($ary_env_tmp as $val){
                if(strlen($val) > 0 && substr($val, 0, 1) !== "#"){
                    $strcnt = strpos( $val, "=");
                    if($tmp_cnt > 10){
                        $ary_env[$const_env.round($tmp_cnt/10)][substr($val, 0, $strcnt)] = substr($val, $strcnt + 1);
                    }else {
                        $ary_env[$const_env][substr($val, 0, $strcnt)] = substr($val, $strcnt + 1);
                    }
                }
                $tmp_cnt++;
            }
            return view('pages.settings.const_reg', compact('page_name', 'breadcrumbs', 'ary_env'));

        }

        /* get .env file */
        $env_text = file_get_contents(__DIR__ . '/../../../../../.env');
//        $env_text = $env_text[0];
        $ary_env_tmp = explode("\n",$env_text);

        $ary_env[$const_env] = array();
        foreach ($ary_env_tmp as $val){
            if(strlen($val) > 0 && substr($val, 0, 1) !== "#"){
                $strcnt = strpos( $val, "=");
                if($tmp_cnt > 10){
                    $ary_env[$const_env.round($tmp_cnt/10)][substr($val, 0, $strcnt)] = substr($val, $strcnt + 1);
                }else {
                    $ary_env[$const_env][substr($val, 0, $strcnt)] = substr($val, $strcnt + 1);
                }
            }
            $tmp_cnt++;
        }
        return view('pages.settings.const2', compact('page_name', 'breadcrumbs', 'ary_env'));
    }
}
