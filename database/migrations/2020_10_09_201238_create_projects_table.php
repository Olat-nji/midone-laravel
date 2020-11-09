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
            $table->string('name');
            $table->foreignId('team_id');
            $table->foreignId('user_id');
            $table->integer('budget')->nullable();
            $table->text('image')->nullable();
            $table->string('status')->nullable();
            $table->string('purpose')->nullable();
            $table->string('ecommerce')->nullable(); 
            $table->string('no_of_products')->nullable();
            $table->string('vendors')->nullable();
            $table->string('similar')->nullable(); 
            $table->string('similar_websites')->nullable();
            $table->integer('progress')->nullable();
            $table->longText('description')->nullable();
            $table->string('urgency')->nullable();
            $table->string('extent_of_redesign')->nullable();
            $table->string('website_url')->nullable();
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
