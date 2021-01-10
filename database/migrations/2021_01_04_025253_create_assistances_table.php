<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Assistance;

class CreateAssistancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
     {
        Schema::create('assistances', function (Blueprint $table) {
            $table->id();

            $table->text('symptoms');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->text('address');

            $table->enum('status',[Assistance::Coordinate,Assistance::Coordinated])->default(Assistance::Coordinate);

            // $table->unsignedBigInteger('lesson_id');
            // $table->foreign('lesson_id')->references('id')->on('lessons')->onDelete('cascade');


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
        Schema::dropIfExists('assistances');
    }
}
