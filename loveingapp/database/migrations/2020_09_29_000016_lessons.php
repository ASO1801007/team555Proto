<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Lessons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            /* 属性達の定義 */
            $table->increments('id');
            $table->string('intro',255);
            $table->integer('user_id')->unsigned();
            $table->integer('language_id')->unsigned();
            $table->integer('timetype_id')->unsigned();
            $table->timestamps();

            /* ユーザー(auth)機能と結合するもの

            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');

            */

            $table->foreign('language_id')
            ->references('id')->on('languages')
            ->onDelete('cascade');

            $table->foreign('timetype_id')
            ->references('id')->on('timetypes')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
