<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_communes_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunesTable extends Migration
{
    public function up()
    {
        Schema::create('communes', function (Blueprint $table) {
            $table->unsignedInteger('id_com')->autoIncrement();
            $table->unsignedInteger('id_reg');
            $table->string('description',  90); // Define la longitud de la descripción
            $table->enum('status', ['A', 'I', 'trash'])->default('A');
            $table->timestamps();

            $table->foreign('id_reg')->references('id_reg')->on('regions');
        });
    }

    public function down()
    {
        Schema::dropIfExists('communes');
    }
}
