<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false);
            $table->string('name')->nullable(false);
            $table->Integer('price')->nullable(false);
            $table->string('bull_content');
            $table->string('bill_comment');
            $table->Integer('category_id');
            $table->boolean('delte_flg');
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
        Schema::dropIfExists('bills');
    }
}
