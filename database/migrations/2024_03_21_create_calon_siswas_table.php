<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('calon_siswa_t', function (Blueprint $table) {
            $table->id();
            $table->boolean('aktif')->default(true);
            $table->string('email')->unique();
            $table->string('jalur_masuk');
            $table->string('nisn');
            $table->string('nama_lengkap');
            $table->string('alamat');
            $table->date('tanggal_lahir');
            $table->string('no_hp');
            $table->foreignId('jenis_kelamin_id')->nullable();
            $table->boolean('is_pembayaran_formulir')->nullable();
            $table->unsignedInteger('pembayaran_formulir_id')->nullable();
            $table->unsignedInteger('users_id')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('calon_siswa_t');
    }
}; 