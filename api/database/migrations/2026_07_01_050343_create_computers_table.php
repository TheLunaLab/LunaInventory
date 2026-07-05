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
        Schema::create('computers', function (Blueprint $table) {
            $table->id();

            $table->string('computer_name');
            $table->string('manufacturer');
            $table->string('model');
            $table->string('serial_number')->nullable();

            $table->string('operating_system');
            $table->integer('ram_gb');
            $table->integer('storage_gb');

            $table->string('assigned_user')->nullable();
            $table->text('notes')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computers');
    }
};