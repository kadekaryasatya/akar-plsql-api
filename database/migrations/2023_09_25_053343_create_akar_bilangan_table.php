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
        Schema::create('akar_bilangan', function (Blueprint $table) {
            $table->id();
            $table->float('bilangan');
            $table->float('akar');
            $table->float('waktu_pemrosesan');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akar_bilangan');
    }
};
