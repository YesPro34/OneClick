<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEssaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('essais', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
             $table->string('entreprise');
            $table->string('tel_entreprise');
            $table->string('position');
            $table->string('adresse');  
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
        Schema::dropIfExists('essais');
    }
}