<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     */
    // ... (código de la migración)

    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->unsignedInteger('id_reg')->autoIncrement();
            $table->string('description',  90); // Define la longitud de la descripción
            $table->enum('status', ['A', 'I', 'trash'])->default('A');
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('communes');
    }
};
