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
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');//real_estate_number يكون تلقائي 
            $table->string('name');//عنوان الاعلان
            $table->string('real_estate_advertisement_number',255)->unique();// رقم الاعلان يدخله يدوي
            // $table->string('picture');
            $table->string('country'); 
            $table->string('city');
            $table->integer('status')->default(1);
            $table->integer('views')->default(0);
            $table->integer('recommended')->default(0);
            $table->unsignedBigInteger('catogerie_id');
            $table->foreign('catogerie_id')->references('id')->on('catogerys')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('properties');
    }
};
