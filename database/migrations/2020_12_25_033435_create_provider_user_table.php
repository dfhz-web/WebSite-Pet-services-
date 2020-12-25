<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_user', function (Blueprint $table) {
            $table->id();

            
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('obtain_id');
   
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('obtain_id')->references('id')->on('obtains');
            
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
        Schema::dropIfExists('provider_user');
    }
}
