<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camp_benefits', function (Blueprint $table) {
            $table->id();
            // 1st Method
            // $table->bigInteger('camp_id')->unsigned();
            $table->unsignedBigInteger('camp_id');

            //2nd Method
            //$table->foreignId('camp_id')->constrained();
            //-> syarat nama fk harus sama dg nama table
            $table->string('name');
            $table->timestamps();

            //1st Method
            $table->foreign('camp_id')->references('id')->on('camps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camp_benefits');
    }
};
