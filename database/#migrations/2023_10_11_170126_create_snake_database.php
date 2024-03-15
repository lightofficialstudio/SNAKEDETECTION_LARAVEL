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
        Schema::create('snake_posion_code', function (Blueprint $table) {
            $table->id();
            $table->text('code_name')->nullable();
        });

        Schema::create('snake_database', function (Blueprint $table) {
            $table->id();
            $table->string('category')->nullable();
            $table->string('name_th')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_sci')->nullable();
            $table->text('features')->nullable();
            $table->text('behaviors')->nullable();
            $table->text('food')->nullable();
            $table->text('location')->nullable();
            $table->text('status')->nullable();
            $table->text('reference')->nullable();
            $table->unsignedBigInteger('posion_id')->nullable();
            $table->text('image')->nullable();
            $table->timestamps();

            $table->foreign('posion_id')->references('id')->on('snake_posion_code');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('snake_database');
        Schema::dropIfExists('snake_posion_code');
    }
};
