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
        Schema::table('snake_qulification', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('snake_id');
            $table->text('color');

            $table->foreign('snake_id')->references('id')->on('snake_database');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
