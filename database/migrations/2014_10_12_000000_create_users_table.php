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
            $table->string('username');
            $table->string('email')->unique();
            //-1 guest 0 user 1 admin 2 coach 3 partners 4 trainer
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('c_password');
            $table->string('Status', 10)->default('مفعل');
            $table->enum('role',['0','1','2','3','4'])->default('0');
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
