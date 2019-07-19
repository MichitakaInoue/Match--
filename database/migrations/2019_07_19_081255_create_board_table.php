<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('board', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false);
            $table->integer('sale_user')->nullable(false);
            $table->integer('buy_user')->nullable(false);
            $table->integer('product_id')->nullable(false);
            $table->boolean('delte_flg')->default(false);
            $table->datetime('create_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('update_date')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('board');
    }
}
