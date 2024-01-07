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
        Schema::create('bar_pubs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idb');
            $table->unsignedBigInteger('idp');
            $table->timestamps();

            $table->foreign('idb')->references('id')->on('beers')->onDelete('cascade');
            $table->foreign('idp')->references('id')->on('pubs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bar_pubs');
    }
};
