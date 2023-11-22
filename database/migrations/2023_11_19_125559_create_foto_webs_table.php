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
        Schema::create('foto_webs', function (Blueprint $table) {
            $table->id();
            $table->string('key')->default('')->nullable(false);
            $table->string('label');
            $table->string('value');
            $table->string('type')->default('')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_webs');
    }
};
