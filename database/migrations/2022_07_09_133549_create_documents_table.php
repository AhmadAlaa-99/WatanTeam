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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('docTypes');
            $table->date('docDate');
            $table->string('fileIcon');
            $table->boolean('forpublish')->default('0');
            $table->string('docFile');
            $table->string('description');
            $table->timestamps();
            
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('department_id')->nullable()->constrained('departments')->onDelete('cascade');
            $table->foreignId('type_id')->nullable()->constrained('documents_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
};
