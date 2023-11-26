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
            $table->string('conta')->default(null);
            $table->string('valor')->default(null);;
            $table->dateTime('data_compra')->default(null);;
            $table->dateTime('data_vencimento')->default(null);;
            $table->string('estabelecimento')->default(null);;
            $table->timestamps();
            $table->softDeletes();
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
