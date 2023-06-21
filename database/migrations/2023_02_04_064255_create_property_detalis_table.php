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
            $table->double('price_all'); // مجموع سعر العقار
            $table->double('price_meter'); // suv g;g ljv
          //  $table->double('type_property')->nullable();
            $table->string('Rental_term')->nullable(); // مدة الايجار سنوي شهري يومي للبيع
            $table->text('description'); // الوصف
            $table->double('space'); // مساحة العقار
            // $table->string('building_type')->nullable(); // 
            $table->string('property_direction');          
            $table->boolean('negotiate')->default(false);// التفاوض
            $table->integer('numbeer_toilet')->nullable();
            $table->integer('numbeer_room')->nullable();
            $table->double('longitude')->nullable();
            $table->double('latitude')->nullable();
            $table->string('address')->nullable();
            $table->boolean('iscomment')->default(false);// التفاوض

            // $table->string('seller_phone')->nullable();
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
