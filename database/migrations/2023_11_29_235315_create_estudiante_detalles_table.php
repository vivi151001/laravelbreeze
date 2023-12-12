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
        Schema::create('estudiante_detalles', function (Blueprint $table) {
            $table->id();
            $table->integer('praMod1');
            $table->integer('praMod2');
            $table->integer('praMod3');
            $table->integer('udMod1');
            $table->integer('udMod2'); //1,2,3
            $table->integer('udMod3'); //1,6
            $table->integer('ceridi'); //0,1
            $table->integer('modTit'); //0,1
            $table->date('fecDet'); //0,1
            $table->string('estDet'); //0,1
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiante_detalles');
    }
};
