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
        Schema::create('people_tourists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('human_id');
            $table->unsignedBigInteger('tourist_id');
            $table->timestamps();

            // IDX
            $table->index('human_id', 'people_tourists_human_idx');
            $table->index('tourist_id', 'people_tourists_tourist_idx');

            // FK
            $table->foreign('human_id', 'people_tourists_human_fk')->on('people')->references('id');
            $table->foreign('tourist_id', 'people_tourists_tourist_fk')->on('tourists')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people_tourists');
    }
};
