<?php


namespace App\Models\Pgsql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ServerStatus extends Model
{
    public static function getDatabases(){
        $result = DB::connection('pgsql_sys')->table('pg_database')->get();
        $result = json_decode(json_encode($result),1);
        foreach($result as $aryDatabases){
            switch($aryDatabases['datname']){
                case 'postgres':
                case 'template0':
                case 'template1':
                    break;
                default:
                    $aryDatabase[] = $aryDatabases;
            }
        }
        return $aryDatabase;
    }

    public static function getTablesFromDb($connect_name = 'pgsql', $db_name = null){

        $result = DB::connection($connect_name)
            ->table('pg_stat_user_tables as PSUT')
            ->leftjoin('pg_description as PD', 'PSUT.relid', '=', 'PD.objoid')
            ->whereNull('PD.objsubid')
            ->orWhere('PD.objsubid', '=', 0)
            ->orderBy('PSUT.relname')
            ->get();
        $result = json_decode(json_encode($result),1);
        return $result;
    }

}
