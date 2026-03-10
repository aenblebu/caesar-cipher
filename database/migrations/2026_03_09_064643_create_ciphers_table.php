<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('ciphers', function (Blueprint $table) {
            $table->id();
            $table->text('plaintext');
            $table->text('ciphertext');
            $table->integer('shift');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ciphers');
    }
};