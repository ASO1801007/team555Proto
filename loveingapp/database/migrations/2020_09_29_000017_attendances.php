<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Attendances extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            /* 属性達の定義 */
            $table->increments('id');
            $table->date('attendDate');
            $table->boolean('attendFlag');
            $table->integer('user_id')->unsigned();
            $table->integer('lesson_id')->unsigned();
            $table->timestamps();

            /* ユーザー(auth)機能と結合するもの

            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');

            */

            $table->foreign('lesson_id')
            ->references('id')->on('lessons')
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
        Schema::dropIfExists('attendances');
    }
}
