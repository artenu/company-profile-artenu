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
    Schema::create('team_members', function (Blueprint $table) {
        $table->id();
        $table->string('name');                         // Nama Anggota
        $table->string('role');                         // Jabatan (cth: Principal Architect, Lead Engineer)
        $table->text('bio')->nullable();                // Deskripsi keahlian singkat
        $table->string('avatar')->nullable();           // Foto profil
        $table->string('linkedin_url')->nullable();     // Tautan LinkedIn
        $table->string('github_url')->nullable();       // Tautan GitHub (khas software engineer)
        $table->integer('order')->default(0);           // Urutan tampil
        $table->boolean('is_active')->default(true);    // Status aktif
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_members');
    }
};
