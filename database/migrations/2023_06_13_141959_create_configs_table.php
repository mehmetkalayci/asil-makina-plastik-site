<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->string('phone', 512)->nullable();
            $table->string('email1', 512)->nullable();
            $table->string('email2', 512)->nullable();
            $table->string('email3', 512)->nullable();
            $table->string('address', 512)->nullable();
            $table->string('gmap_url', 512)->nullable();
            $table->string('opening_hours', 512)->nullable();
            $table->string('facebook', 512)->nullable();
            $table->string('instagram', 512)->nullable();
            $table->string('twitter', 512)->nullable();
            $table->string('linkedin', 512)->nullable();

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
        Schema::dropIfExists('configs');
    }
};
