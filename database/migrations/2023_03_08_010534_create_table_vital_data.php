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
        Schema::create('vital_data', function (Blueprint $table) {
            $table->integer('id');
            $table->date('date');
            $table->float('weight');
            $table->float('height');
            $table->float('temperature');
            $table->integer('pressure');
            $table->integer('pulse');
            $table->string('message');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vital_data');
    }
};
