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
        Schema::create('tourist_phones_tourists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tourist_phone_id');
            $table->unsignedBigInteger('tourist_id');
            $table->timestamps();

            // IDX
            $table->index('tourist_phone_id', 'tourist_phones_tourists_tourist_phone_idx');
            $table->index('tourist_id', 'tourist_phones_tourists_messenger_idx');

            // FK
            $table->foreign('tourist_phone_id', 'tourist_phones_tourists_tourist_phone_fk')->on('tourist_phones')->references('id');
            $table->foreign('tourist_id', 'tourist_phones_tourists_tourist_fk')->on('tourists')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tourist_phones_tourists');
    }
};
