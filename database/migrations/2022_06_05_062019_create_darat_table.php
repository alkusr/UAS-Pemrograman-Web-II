<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('darat', function (Blueprint $table) {
            $table->id();
            $table->string('no_binatang');
            $table->string('nama');
            $table->string('jenis')->nullable();
            $table->string('jk')->nullable();
            $table->string('kandang_id')->nullable();
            $table->string('kesehatan_id')->nullable();
            $table->string('makanan_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('darat');
    }
};
