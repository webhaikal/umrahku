<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('madhotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('star')->default(1);
            $table->integer('nights');
            $table->integer('distance');
            $table->foreignId('package_id')->nullable();
            $table->timestamps();
        });

        Schema::create('makhotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('star')->default(1);
            $table->integer('nights');
            $table->integer('distance');
            $table->foreignId('package_id')->nullable();
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
        Schema::dropIfExists('madhotels');
        Schema::dropIfExists('makhotels');
    }
}
