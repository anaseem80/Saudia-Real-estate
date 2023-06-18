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
        Schema::create('setting_webs', function (Blueprint $table) {
            $table->id();
            $table->text('about_page')->nullable();
            $table->text('terms')->nullable();
            $table->string('color_h1')->nullable();
            $table->string('color_p')->nullable();
            $table->string('color_h2')->nullable();
            $table->string('color_h3')->nullable();
            $table->string('color_h4')->nullable();
            $table->string('color_h5')->nullable();
            $table->string('color_h6')->nullable();
            $table->string('color_background')->nullable();
            $table->string('color_primery')->nullable();
            $table->string('color_second_primery')->nullable();
            $table->string('licance_web')->nullable();
            $table->string('banner')->nullable();
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
        Schema::dropIfExists('setting_webs');
    }
};
