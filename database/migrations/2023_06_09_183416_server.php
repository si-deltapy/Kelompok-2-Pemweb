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
        Schema::create('server', function (Blueprint $table){
            $table->id();
            $table->string('nama');
            $table->string('server_prosesor');
            $table->integer('juml_core');
            $table->string('jenis_Server');
            $table->string('status');
            $table->string('http_status');
            $table->integer('ram');
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('server');
    }
};
