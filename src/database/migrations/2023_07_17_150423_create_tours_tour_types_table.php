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
        Schema::create('tours_tour_types', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tour_id');
            $table->unsignedBigInteger('tour_type_id');
            $table->timestamps();

            // IDX
            $table->index('tour_id', 'tours_tour_types_tour_idx');
            $table->index('tour_type_id', 'tours_tour_types_tour_type_idx');

            // FK
            $table->foreign('tour_id', 'tours_tour_types_tour_fk')->on('tours')->references('id');
            $table->foreign('tour_type_id', 'tours_tour_types_tour_type_fk')->on('tour_types')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours_tour_types');
    }
};
