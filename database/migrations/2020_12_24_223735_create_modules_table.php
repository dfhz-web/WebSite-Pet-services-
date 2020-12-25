<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Module;
use phpDocumentor\Reflection\Types\Nullable;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->text('description');
            $table->enum('status',[Module::eraser,Module::check,Module::published])->default(Module::eraser);
            
            $table->string('slug');

            $table->unsignedBigInteger('user_id');///hace referencia al usuario que puede subir un modulo
            $table->unsignedBigInteger('kind_id')->nullable();
            $table->unsignedBigInteger('type_id')->nullable();
            $table->unsignedBigInteger('price_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->foreign('kind_id')->references('id')->on('kinds')->onDelete('set null');
            
            $table->foreign('type_id')->references('id')->on('types')->onDelete('set null');
            
            $table->foreign('price_id')->references('id')->on('prices')->onDelete('set null');



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
        Schema::dropIfExists('modules');
    }
}
