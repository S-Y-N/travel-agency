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
        Schema::create('tourist_tags_tourists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("tourist_tag_id");
            $table->unsignedBigInteger("tourist_id");

            //IDX
            $table->index("tourist_tag_id","tourist_tags_tourists_tourist_tag_idx");
            $table->index("tourist_id","tourist_tags_tourists_tourist_idx");

            //FK
            $table->foreign("tourist_tag_id",'tourist_tags_tourists_tourist_tag_fk')->on('tourist_tags')->references('id');
            $table->foreign("tourist_id",'tourist_tags_tourists_tourist_fk')->on('tourists')->references('id');
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
        Schema::dropIfExists('tourist_tags_tourists');
    }
};
