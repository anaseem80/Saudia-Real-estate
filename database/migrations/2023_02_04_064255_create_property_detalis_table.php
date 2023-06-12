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
        Schema::create('property_detalis', function (Blueprint $table) {
            $table->id();       
            $table->double('price');
          //  $table->double('type_property')->nullable();
            $table->string('Rental_term')->nullable();
            $table->text('description');
            $table->double('space');
            $table->string('building_type')->nullable();
            $table->string('property_direction');          
            $table->integer('numbeer_room');
            $table->integer('numbeer_toilet');
            $table->double('longitude')->nullable();
            $table->double('latitude')->nullable();
            $table->string('address')->nullable();

          //  $table->string('classification');
            $table->string('seller_phone')->nullable();;
        
            $table->unsignedBigInteger('property_id');
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_detalis');
    }
};
