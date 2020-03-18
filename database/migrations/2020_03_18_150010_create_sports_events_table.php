<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSportsEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sports_events', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedSmallInteger('_SPORTS_CATEGORY_ID');
            $table->foreign('_SPORTS_CATEGORY_ID')
                ->references('id')
                ->on('sports_categories');
            $table->string('title');
            $table->string('slug')->unique();
            $table->dateTime('starting_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sports_events');
    }
}
