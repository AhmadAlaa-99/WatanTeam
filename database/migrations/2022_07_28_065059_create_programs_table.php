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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('goals');
            $table->string('audince');
            $table->text('topics');
            $table->string('imageUrl')->nullable();
            $table->boolean('active')->default('0');
            $table->string('note');
            $table->timestamps();
            $table->foreignId('cat_id')->constrained('cats')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programs');
    }
};
