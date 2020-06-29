<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBajuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baju', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama_baju',50)->nullable($value = true);
            $table->string('merk',50)->nullable($value = true);
            $table->unsignedBigInteger('jenis_id')->nullable($value = true);
            $table->foreign('jenis_id')->references('id')->on('jenis');
            $table->string('gambar',50)->nullable($value = true);
            $table->integer('harga_beli')->nullable($value = true);
            $table->integer('harga_jual')->nullable($value = true);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baju');
    }
}
