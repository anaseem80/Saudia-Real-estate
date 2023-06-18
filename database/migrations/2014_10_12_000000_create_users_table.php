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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('country', 100);
            $table->string('city', 100);
            $table->enum('user_type', ['user', 'admin', 'vendor'])->default('user');
            $table->unsignedBigInteger('first_phone')->index();
            $table->unsignedBigInteger('second_phone')->nullable()->index();
            $table->integer('number_ads')->default(15);
            $table->string('email', 255)->unique();
            $table->enum('status', ['active', 'inactive', 'banned'])->default('active')->index();
            $table->enum('advertiser_type', ['office', 'broker', 'owner','user'])->default('user');// مكتب وسيط مالك
            $table->string('commercial_registration_no', 50)->nullable();
            $table->string('license_number', 50)->nullable();
            $table->string('password', 255);
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
             // Indexes
            $table->index('email');
            $table->index('user_type');
     
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
