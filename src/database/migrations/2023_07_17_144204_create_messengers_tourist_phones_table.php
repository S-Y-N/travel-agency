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
        Schema::create('messengers_tourist_phones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('messenger_id');
            $table->unsignedBigInteger('tourist_phone_id');
            $table->timestamps();

            // IDX
            $table->index('messenger_id', 'messengers_tourist_phones_messenger_idx');
            $table->index('tourist_phone_id', 'messengers_tourist_phones_tourist_phone_idx');

            // FK
            $table->foreign('messenger_id', 'messengers_tourist_phones_messenger_fk')->on('messengers')->references('id');
            $table->foreign('tourist_phone_id', 'messengers_tourist_phones_tourist_phone_fk')->on('tourist_phones')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messengers_tourist_phones');
    }
};
