<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialistesTable extends Migration
{
    public function up()
    {
        Schema::create('specialistes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom');
            $table->string('postnom');
            $table->string('prenom');
            $table->string('adresse');
        });
    }

    public function down()
    {
        Schema::dropIfExists('specialistes');
    }
}
