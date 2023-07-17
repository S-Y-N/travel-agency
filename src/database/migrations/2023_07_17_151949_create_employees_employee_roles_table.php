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
        Schema::create('employees_employee_roles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('employee_role_id');
            $table->timestamps();

            // IDX
            $table->index('employee_id', 'employees_employee_roles_employee_idx');
            $table->index('employee_role_id', 'employees_employee_roles_employee_role_idx');

            // FK
            $table->foreign('employee_id', 'employees_employee_roles_employee_fk')->on('employees')->references('id');
            $table->foreign('employee_role_id', 'employees_employee_roles_employee_role_fk')->on('employee_roles')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees_employee_roles');
    }
};
