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
        Schema::create('contas', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('descricao');
            $table->string('descricao_outro', 255)->nullable();
            $table->decimal('valor', 8,2);
            $table->date('vencimento');
            $table->unsignedTinyInteger('situacao');
            $table->text('descricao_detalhada');
            $table->foreignId('usuario_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contas');
    }
};
