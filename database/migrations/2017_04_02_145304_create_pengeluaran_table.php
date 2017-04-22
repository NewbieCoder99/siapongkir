<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengeluaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('pengeluaran', function(Blueprint $table)
        {

            $table->increments('id_pengeluaran');
            $table->integer('id')->unsigned();
            $table->string('keterangan', 30);
            $table->date('tgl');
            $table->integer('jumlah_pengeluaran');

            $table->foreign('id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       schema::drop('pengeluaran');
    }
}
