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
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('role_as')->nullable();
            $table->string('cnic_number')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_cnic')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->text('address')->nullable();
            $table->string('area')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('qualification')->nullable();
            $table->string('occupation')->nullable();
            $table->string('verified_by')->nullable();
            $table->string('received_by')->nullable();
            $table->string('created_by')->nullable();
            $table->date('received_at')->nullable();
            $table->string('baradari_member')->nullable();
            $table->string('membership_number')->nullable();
            $table->string('otp_token')->nullable();
            $table->timestamp('otp_token_expiry')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
