<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->bigInteger('price')->nullable();
            $table->text('engine_type')->nullable();
            $table->text('car_id')->nullable();
            $table->text('transmission')->nullable();
            $table->text('fuel_type')->nullable();
            $table->foreignId('type_id')->nullable();
            $table->foreignId('make_id')->nullable();
            $table->text('condition')->nullable();
            $table->text('exterior_color')->nullable();
            $table->text('interior_color')->nullable();
            $table->text('vin')->nullable();
            $table->text('stars')->nullable();
            $table->text('type')->nullable();
            $table->text('car_location')->nullable();
            $table->text('distance_used_for')->nullable();
            $table->boolean('distress')->nullable();
            $table->text('model')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->boolean('approved')->nullable();
            $table->boolean('sold')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
