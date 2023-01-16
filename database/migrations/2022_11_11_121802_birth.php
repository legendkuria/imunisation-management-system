<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Birth extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('birth', function (Blueprint $table) {
            $table->id();
            $table->string('pname');
            $table->string('email');
            $table->string('cname');
            $table->string('birth');
            $table->string('date');
            $table->string('gender');
            $table->string('condition');
            $table->string('status');
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
        //
    }
}
