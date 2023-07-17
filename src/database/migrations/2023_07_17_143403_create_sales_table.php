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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->date('start_date');
            $table->date('end_date');
            $table->string('description', 1024)->nullable();

            $table->unsignedBigInteger('tour_id');
            $table->unsignedBigInteger('tourist_id');
            $table->unsignedBigInteger('employee_id');

            //IDX
            $table->index('tour_id',name:'sales_tour_idx');
            $table->index('tourist_id',name:'sales_tourist_idx');
            $table->index('employee_id',name:'sales_employee_idx');

            //FK
            $table->foreign('tour_id',name:'sales_tour_fk')->on('tours')->references('id');
            $table->foreign('tourist_id',name:'sales_tourist_fk')->on('tourists')->references('id');
            $table->foreign('employee_id',name:'sales_employee_fk')->on('employees')->references('id');


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
        Schema::dropIfExists('sales');
    }
};
