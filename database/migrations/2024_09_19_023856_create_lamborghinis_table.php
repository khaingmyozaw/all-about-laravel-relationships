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
        Schema::create('lamborghinis', function (Blueprint $table) {
            $table->id();
            $table->string('model');

            // => Method 1 
            $table->unsignedBigInteger('user_id');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');

            // => Method 2
            // $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');

            /**
             * Notice that on the method if you wanna set user_id column to nullable,
             * you need to add nullable() before ```constrained('users')``` to work as you expected.
             * Like below
             */

            // $table->foreignId('user_id')->nullable()->constrained('users')->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lamborghinis');
    }
};
