<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part_courses', function (Blueprint $table) {
            $table->foreignId('course_id')->nullable()->constrained('courses')->onDelete('cascade');
            $table->foreignId('partner_id')->nullable()->constrained('partners')->onDelete('cascade');
            $table->date('accept_date');
            $table->tinyInteger('accept')->default('0');
            $table->primary(['partner_id', 'course_id']);
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
        Schema::dropIfExists('part_courses');
    }
}
