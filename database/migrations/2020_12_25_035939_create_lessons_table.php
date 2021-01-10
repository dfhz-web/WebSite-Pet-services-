<?php

use App\Models\Assistance;
use App\Models\Lesson;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url');
            $table->string('iframe');

            $table->enum('fillout',[Lesson::fill_out_empty, Lesson::fill_out])->default(Lesson::fill_out_empty);
            $table->enum('answere',[Lesson::result_empty, Lesson::result])->default(Lesson::result_empty);

            $table->unsignedBigInteger('platform_id')->nullable();
            $table->unsignedBigInteger('section_id');

            $table->foreign('platform_id')->references('id')->on('platforms')->onDelete('set null');
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');

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
        Schema::dropIfExists('lessons');
    }
}
