<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProdustsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_produsts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('products_id')->unsigned();
            $table->timestamps();
            $table->foreign('user_id')
                   ->references('id')
                   ->on('users')
                   ->cascadeOnDelete()
                   ->cascadeOnUpdate();
            $table->foreign('products_id')
                   ->references('id')
                   ->on('products')
                   ->cascadeOnDelete()
                   ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_produsts');
    }
}
