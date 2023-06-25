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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('correo',100)->unique();
            $table->bigInteger('telefono',12)->unsigned()->nullable(true)->change();
            $table->string('mensaje');
            $table->timestamps();
            $table->softDeletes();

        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
        Schema::table('personas', function (Blueprint $table) {
            $table->integer('telefono')->unsigned()->nullable(false)->change();
        });
    }
};
