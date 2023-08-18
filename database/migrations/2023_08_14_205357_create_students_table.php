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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->string('religion');
            $table->date('date');
            $table->string('upi');
            $table->string('filename')->nullable();
            $table->string('national');
            $table->string('nationality')->nullable();
            $table->string('mname');
            $table->string('memail')->nullable();
            $table->string('mnumber')->nullable();
            $table->string('fname');
            $table->string('femail')->nullable();
            $table->string('fnumber')->nullable();
            $table->string('gname');
            $table->string('gemail')->nullable();
            $table->string('gnumber')->nullable();
            $table->string('raddress');
            $table->string('paddress');
            $table->string('adm');
            $table->string('class_id');
            $table->string('stream_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
