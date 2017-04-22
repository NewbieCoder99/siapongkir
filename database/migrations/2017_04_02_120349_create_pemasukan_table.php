<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemasukanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        schema::create('pemasukan', function(Blueprint $table)
        {

            $table->increments('id_pemasukan');
            $table->integer('id')->unsigned();
            $table->string('keterangan', 30);
            $table->date('tgl');
            $table->float('jumlah_pemasukan',8,2);

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
        schema::drop('pemasukan');
    }
}
