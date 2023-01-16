<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParent1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent1', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('cname');
            $table->string('date');
            $table->string('gender');
            $table->string('location');
            $table->string('weight');
            $table->string('vname');
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
        Schema::dropIfExists('parent1');
    }
}
