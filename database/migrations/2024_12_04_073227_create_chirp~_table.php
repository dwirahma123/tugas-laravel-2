<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


Return New Class Extends Migration
{
    /**
     *Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chrps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('message');
            $table->string('media_path')->nullable();
            $table->sting('media_type')->nullable();
            $table->timestamps();
        });
    }

    
/**
     *Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExist('chrps');
    }
};