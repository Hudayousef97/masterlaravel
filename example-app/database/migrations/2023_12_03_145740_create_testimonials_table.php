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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();;
            $table->string('email')->nullable();;
            $table->string('service')->nullable();;
            $table->string('doctor')->nullable();;
            $table->date('date')->nullable();;
            $table->time('time')->nullable();;
            $table->text('message')->nullable();
            $table->text('status')->nullable();;
            $table->string('user_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
