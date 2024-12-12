<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table -> string('name',255);
            $table -> string('email',255)-> unique() -> require();
            $table -> string('password',255) -> require();
            $table -> string('identification_number',255) -> unique() -> require();

            $table -> unsignedBigInteger('role_id');
            $table -> foreign('role_id') -> references('id')->on('roles')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
