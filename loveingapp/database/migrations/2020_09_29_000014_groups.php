<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Groups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            /* 属性達の定義 */
            $table->increments('id');
            $table->integer('user_id1')->unsigned();
            $table->integer('user_id2')->unsigned();
            $table->timestamps();

            /* ユーザー(auth)機能と結合するもの

            $table->foreign('user_id1')
            ->references('id')->on('users')
            ->onDelete('cascade');

            $table->foreign('user_id2')
            ->references('id')->on('users')
            ->onDelete('cascade');

            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups');
    }
}
