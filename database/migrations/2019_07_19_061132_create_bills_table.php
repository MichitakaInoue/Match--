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
            $table->string('title')->nullable(false);
            $table->Integer('price')->nullable(false);
            $table->string('bill_content');
            $table->string('bill_comment');
            $table->unsignedBigInteger('user_id');
            $table->Integer('category_id');
            $table->string('pic');
            $table->boolean('delte_flg');
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
        Schema::dropIfExists('bills');
    }
}
