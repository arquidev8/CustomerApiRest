<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
         
            // $table->string('dni')->unique();
            // $table->unsignedInteger('id_reg');
            // $table->unsignedInteger('id_com');
            // $table->string('email')->unique();
            // $table->string('name');
            // $table->string('last_name');
            // $table->text('address')->nullable();
            // $table->timestamp('date_reg');
            // $table->enum('status', ['A', 'I', 'trash'])->default('A');
            // $table->timestamps();
            // $table->softDeletes()->nullable();

            // $table->foreign('id_reg')->references('id_reg')->on('regions');
            // $table->foreign('id_com')->references('id_com')->on('communes');

            $table->string('dni',  45)->unique();
            $table->unsignedInteger('id_reg');
            $table->unsignedInteger('id_com');
            $table->string('email',  120)->unique();
            $table->string('name',  45);
            $table->string('last_name',  45);
            $table->text('address')->nullable();
            $table->timestamp('date_reg');
            $table->enum('status', ['A', 'I', 'trash'])->default('A');
            $table->timestamps();
            $table->softDeletes()->nullable();

            $table->foreign('id_reg')->references('id_reg')->on('regions');
            $table->foreign('id_com')->references('id_com')->on('communes');
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
}