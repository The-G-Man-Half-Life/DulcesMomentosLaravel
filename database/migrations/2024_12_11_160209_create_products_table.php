<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',255)->require();
            $table->longText('description');
            $table->double('price')->require();
            $table->timestamp('creation_date')->useCurrent();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
