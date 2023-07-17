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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('title',256)->unique();
            $table->string('city',256)->nullable();
            $table->string('address',256)->nullable();
            $table->unsignedBigInteger('bank_id');


            //IDX
            $table->index('bank_id',name:'companies_bank_idx');

            //FK
            $table->foreign('bank_id',name:'companies_fk')->on('banks')->references('id');

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
        Schema::dropIfExists('companies');
    }
};
