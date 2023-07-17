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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 128);
            $table->string('middle_name', 128)->nullable();
            $table->string('last_name', 128);
            $table->string('pass_serial', 128)->nullable()->unique();
            $table->string('pass_num', 128)->nullable()->unique();
            $table->string('pass_dist', 128)->nullable();
            $table->date('pass_date')->nullable();
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
        Schema::dropIfExists('people');
    }
};
