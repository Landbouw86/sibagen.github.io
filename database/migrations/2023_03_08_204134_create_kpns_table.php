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
        Schema::create('kpns', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->date('tanggal')->nullable();
            $table->string('nama')->nullable();
            $table->bigInteger('nip')->nullable();
            $table->string('golruang')->nullable();
            $table->date('tmt_terakhir')->nullable();
            $table->text('unor_nama')->nullable();
            $table->text('status_berkas')->nullable();
            $table->text('keterangan')->nullable();
            $table->foreignUuid('kpn_kategori_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kpns');
    }
};
