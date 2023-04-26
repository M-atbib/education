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
        Schema::create('formations', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('title');
            $table->longText('description');
            $table->integer('id_teacher')->nullable();
            $table->unsignedBigInteger('id_category');
            $table->integer('number_class');
            $table->float('course_duration');
            $table->integer('number_student');
            $table->integer('number_month');
            $table->float('price')->default(1);
            $table->string('video_link');
            $table->string('imageVideo');
            $table->enum('action',[0,1])->default(0);
            $table->timestamps();
            $table->foreign('id_category')
                ->references('id')
                ->on('categorys')
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
        Schema::dropIfExists('formations');
    }
};
