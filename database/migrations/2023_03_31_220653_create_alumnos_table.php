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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('first_lastname',50)->nullable();
            $table->string('second_lastname',50)->nullable();
            $table->string('first_name',50);
            $table->string('second_name',50)->nullable();
            $table->string('third_name',50)->nullable();
//            $table->string('district',50)->nullable();
//            $table->string('address',50)->nullable();
            $table->integer('sex')->default(3); //1 hombres 2 mujeres
            $table->string('document');  //DNI
            $table->date('date_born')->nullable();
            $table->string('year_income')->nullable();
            $table->string('cicle')->nullable(); // (01 -> 1 /02 -> 2)
            $table->boolean('is_delete')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
