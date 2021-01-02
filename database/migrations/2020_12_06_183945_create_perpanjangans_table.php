<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerpanjangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perpanjangan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_member')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->date('aktif');
            $table->date('tenggat');
            $table->string('uang');
            $table->string('bukti');
            $table->integer('status');
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
        Schema::dropIfExists('perpanjangans');
    }
}
