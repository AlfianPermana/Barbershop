<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookons', function (Blueprint $table) {
            $table->id();
            $table->string('Fullname');
            $table->string('Email');
            $table->string('Address');
            $table->string('phone');
            $table->string('jam');
            $table->date('tanggal');
            $table->string('barber');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookons');
    }
};
