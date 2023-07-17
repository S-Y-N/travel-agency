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
        Schema::create('tours_countries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tour_id');
            $table->unsignedBigInteger('country_id');
            $table->timestamps();

            // IDX
            $table->index('tour_id', 'tours_countries_tour_idx');
            $table->index('country_id', 'tours_countries_country_idx');

            // FK
            $table->foreign('tour_id', 'tours_countries_tour_fk')->on('tours')->references('id');
            $table->foreign('country_id', 'tours_countrie_country_fk')->on('countries')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours_countries');
    }
};
