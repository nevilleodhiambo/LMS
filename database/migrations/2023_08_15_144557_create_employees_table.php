<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->integer('phone')->nullable();
            $table->integer('idno');
            $table->string('gender');
            $table->string('religion');
            $table->date('dob');
            $table->string('photo')->nullable();
            $table->string('signature')->nullable();
            $table->integer('department_id');
            $table->string('designation');
            $table->string('qualification');
            $table->string('subject_id')->nullable();
            $table->date('jsd');
            $table->string('jobno');
            $table->integer('salary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
