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
        Schema::create('ikasles', function (Blueprint $table) {

            $table->id();

            $table->string('izen_abizen', 75);

            $table->integer('adina');

            $table->string('telefonoa', 35)->nullable();

            $table->string('helbidea', 75)->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ikasles');
    }
};
