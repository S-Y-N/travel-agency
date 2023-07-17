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
        Schema::create('legal_bodies', function (Blueprint $table) {
            $table->id();
            $table->string('title',256)->unique();
            $table->string('edrpou',10)->unique();
            $table->string('boss_name',256)->nullable();
            $table->string('boss_function',256)->nullable();
            $table->string('account',   256)->unique();
            $table->unsignedBigInteger('bank_id');
            //IDX
            $table->index('bank_id',name:'legal_bodies_bank_idx');

            //FK
            $table->foreign('bank_id',name:'legal_bodies_bank_fk')->on('banks')->references('id');

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
        Schema::dropIfExists('legal_bodies');
    }
};
