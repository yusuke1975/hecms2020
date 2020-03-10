<?php

namespace App\Models\Pgsql;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MConst extends Model
{
    public static function getConstAll(){
        $result = number_format(DB::connection('pgsql')->table('m_const')->count());

        return $result;
    }    //
}
