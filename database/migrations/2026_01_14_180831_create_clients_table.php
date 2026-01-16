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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cpf', 11)->unique();
            $table->string('email')->unique();
            $table->string('phone', 20);
            $table->string('cep', 8);
            $table->string('street');
            $table->string('neighborhood');
            $table->string('number', 10);
            $table->string('complement')->nullable();
            $table->string('city');
            $table->string('state', 2);
            $table->enum('status', ['ativo', 'inativo'])->default('ativo');
            $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
