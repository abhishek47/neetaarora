<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('intro');
            $table->text('body');
            $table->string('slug');
            $table->decimal('price');
            $table->integer('video_id');
            $table->timestamps();
        });

        Schema::create('course_user', function (Blueprint $table) {
            
            $table->integer('course_id');
            $table->integer('user_id');
            $table->primary(['course_id', 'user_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
        Schema::dropIfExists('course_user');
    }
}
