<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('con_res', function (Blueprint $table) {
            $table->integer('res_id')->unsigned();
            $table->integer('con_id')->unsigned();
            $table->softDeletes();

            $table->foreign('res_id')->references('res_id')->on('resident')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('con_id')->references('con_id')->on('res_contact')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['res_id', 'con_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('con_res');
    }
}
