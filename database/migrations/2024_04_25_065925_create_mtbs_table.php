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
        Schema::create('mtbs', function (Blueprint $table) {
            $table->id();
            $table->string('no_ktp');
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('telpon');
            $table->string('kategori');
            $table->string('klub');
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
        Schema::dropIfExists('mtbs');
    }
};
