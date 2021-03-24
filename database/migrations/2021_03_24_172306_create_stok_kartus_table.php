<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStokKartusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stok_kartu', function (Blueprint $table) {
            $table->id();
            $table -> string('no_po');
            $table -> string('no_kartu');
            $table -> string('serial_number');
            $table -> date('tgl_terminate');
            $table -> varchar('status');
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
        Schema::dropIfExists('stok_kartu');
    }
}
