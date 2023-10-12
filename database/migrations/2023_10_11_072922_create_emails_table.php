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
        Schema::create('emails', function (Blueprint $table) {
            $table->id();
            $table->string('pc_name');
            $table->text('name');
            $table->text('chinaes_name');
            $table->string('id_user');
            $table->integer('dep_id');
            $table->string('email');
            $table->integer('web');
            $table->text('zalo');
            $table->text('webchat');
            $table->boolean('publish');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emails');
    }
};
