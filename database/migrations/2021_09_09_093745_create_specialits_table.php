<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialitsTable extends Migration
{
    
    public function up()
    {
        Schema::create('specialits', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nom");
            $table->string('description');
            $table->unsignedBigInteger('specialist_id');
            $table->foreign('specialist_id')->references('id')->on('specialits');
        });
    }

    public function down()
    {
        Schema::dropIfExists('specialits');
    }
}
