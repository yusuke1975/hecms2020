<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_users', function (Blueprint $table) {
            $table->uuid('uuid', 50)->unique()->comment("UUID");
//            $table->string('uuid', 50)->unique()->comment("UUID");
            $table->bigIncrements('id')->comment("seq id");
            $table->string('user_code')->unique()->comment("ユーザーコード");
            $table->string('last_name_jp')->nullable()->comment("日本語ユーザー名 姓");
            $table->string('first_name_jp')->nullable()->comment("日本語ユーザー名 名");
            $table->string('name_lang_code')->default("ja")->comment("ユーザー名表示指定言語コード 'ja'");
            $table->string('lang_code')->default("ja")->comment("言語設定 'ja'");
            $table->string('email')->unique()->comment("メール");
            $table->timestamp('email_verified_at')->nullable()->comment("メール認証日時");
            $table->string('password')->comment("パスワード");
            $table->timestamp('birthday')->nullable()->comment("生年月日");
            $table->binary('user_icon')->nullable()->comment("ユーザーアイコン");
            $table->boolean('admin_flg')->default(false)->comment("管理者フラグ");
            $table->rememberToken();
            $table->timestamps();
        });

        DB::statement("COMMENT ON TABLE m_users IS 'user master'");

        DB::table('m_users')->insert([
//            'uuid' =>  (string) \Illuminate\Support\Str::orderedUuid(),
            'uuid' =>  (string) Str::uuid(),
            'user_code' => "admin",
            'last_name_jp' => "柴田",
            'first_name_jp' => "雄介",
            'email' => "yusuke.1975@gmail.com",
            "password" => Hash::make('admin'),
            'admin_flg' => true,
            'birthday' => "1975/03/13",
            'created_at' => 'NOW()',
            'updated_at' => 'NOW()',

        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
