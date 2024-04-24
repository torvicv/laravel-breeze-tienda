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
        Schema::table('users', function (Blueprint $table) {
            $table->string('direccion', 255)->nullable();
            $table->string('avatar', 255)->nullable();
            $table->string('avatar_name', 255)->nullable();
            $table->string('telefono', 15)->nullable();
            $table->unsignedBigInteger('rol_id')->default(1);
            $table->foreign('rol_id')->references('id')->on('rols');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
