<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('registration', 45);
            $table->string('fullname', 45);
            $table->date('birthday');
            $table->string('financial_responsable', 45);
            $table->string('cpf', 15);
            $table->foreignId('course_id')->constrained('courses');
            $table->foreignId('financial_plan_id')->constrained('financial_plans');
            $table->foreignId('user_id')->constrained('users');
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
        Schema::dropIfExists('students');
    }
}
