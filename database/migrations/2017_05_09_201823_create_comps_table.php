<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('os');
            $table->string('owner')->nullable();
            $table->integer('teamviewer')->nullable()->unsignned();
            $table->string('detalii')->nullable();
            $table->integer('location_id')->unsigned()->nullable()->index();
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
        Schema::dropIfExists('comps');
    }
}
