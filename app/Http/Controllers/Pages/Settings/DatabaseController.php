<?php

namespace App\Http\Controllers\Pages\Settings;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Pgsql\ServerStatus;

class DatabaseController extends Controller
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
        $databases = array();
        $env_dbs = json_decode(env("DBS"),1);

/*
        echo "<pre>";
        print_r(json_decode($env_dbs,1));
        echo "</pre>";
        exit;
            echo "<pre>";
            print_r($db);
            echo "</pre>";
*/

        $databases_result = ServerStatus::getDatabases();

        // sample
        $databases[] = array("aaa","bbb");
        foreach($databases_result AS $db){
            $databases[] = array($db['datname'], array_search($db['datname'], $env_dbs));
        }

        $tables = ServerStatus::getTablesFromDb('pgsql');

        $page_name = "Database";
        $breadcrumbs = "Settings > Database";

        return view('pages.settings.database', compact('page_name', 'breadcrumbs', 'databases', 'tables'));
    }
}
