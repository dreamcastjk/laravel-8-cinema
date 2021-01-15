<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('movie_id')->constrained('movies');
            $table->timestamp('production_year');
            $table->integer('budget')->nullable();
            $table->integer('us_fees')->comment('Сборы в США')->nullable();
            $table->integer('worldwide_fees')->comment('Сборы в мире')->nullable();
            $table->timestamp('premiere_in_russia')->nullable();
            $table->timestamp('premiere_worldwide')->nullable();
            $table->boolean('is_imax')->nullable();
            $table->boolean('is_tree_d')->nullable();
            $table->integer('duration')->nullable();
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
        Schema::dropIfExists('movie_infos');
    }
}
