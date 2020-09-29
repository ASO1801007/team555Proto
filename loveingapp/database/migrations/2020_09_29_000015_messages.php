<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Messages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            /* 属性達の定義 */
            $table->increments('id');
            $table->string('intro',255);
            $table->integer('user_id')->unsigned();
            $table->integer('group_id')->unsigned();
            $table->timestamps();

            /* ユーザー(auth)機能と結合するもの

            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');

            */

            $table->foreign('group_id')->references('id')->on('groups');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
