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
        Schema::create('coaches', function (Blueprint $table) 
        {
            $table->id();
            $table->string('username');
            $table->string('job');
            $table->string('address');
            $table->string('qualification');
            $table->enum('gender',['m','f'])->default('m');
            $table->date('request_date');
            $table->date('accept_date')->nullable();
            $table->string('cvFile')->nullable();
            $table->boolean('trainAuthorized')->default('0');
            $table->boolean('tot')->default('0');
            $table->string('note');
            $table->string('email');
            $table->timestamps();
            
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('department_id')->nullable()->constrained('departments')->onDelete('cascade');
            //$table->foreignId('type_id')->nullable()->constrained('documents_types')->onDelete('cascade'); 

          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coaches');
    }
};
