<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalsTable extends Migration
{
    public function up()
    {
        Schema::create('professionals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('img')->nullable()->default(null);
            $table->integer('specialties_id')->nullable()->default(null);
            $table->string('cv')->nullable()->default(null);
            $table->string('linkedin')->nullable()->default(null);
            $table->integer('order')->nullable()->default(null);
            $table->text('registros')->nullable()->default(null);
            $table->text('titulos')->nullable()->default(null);
            $table->boolean('visible')->nullable()->default(true);
            $table->text('experiencias')->nullable()->default(null);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('professionals');
    }
}
