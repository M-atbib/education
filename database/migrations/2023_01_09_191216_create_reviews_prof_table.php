<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews_prof', function (Blueprint $table) {
            $table->id();
            $table->longText('content');
            $table->float("rating");
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->unsignedBigInteger('id_prof')->unsigned();
            $table->integer('action')->default(1);
            $table->timestamps();
            // relations
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('id_prof')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('reviews_prof');
    }
};
