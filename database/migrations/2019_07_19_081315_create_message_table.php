<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false);
            $table->integer('board_id')->nullable(false);
            $table->datetime('send_date');
            $table->integer('to_user')->nullable(false);
            $table->integer('from_user')->nullable(false);
            $table->string('msg');
            $table->boolean('delte_flg')->default(false);
            $table->timestamps();
            $table->collation = 'utf8mb4_bin';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('message');
    }
}
