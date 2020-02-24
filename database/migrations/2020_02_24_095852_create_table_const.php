<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableConst extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_const', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('const_name')->unique()->comment("設定名");
            $table->string('const_value')->unique()->comment("const値");
            $table->string('const_type_code')->unique()->comment("const値のタイプコード");
            $table->timestamps();
        });

        DB::statement("COMMENT ON TABLE m_const IS 'constマスタ'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_const');
    }
}
