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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title',1024)->nullable();
            $table->string('mission', 1024)->nullable();
            $table->string('vision', 1024)->nullable();
            $table->string('values', 1024)->nullable();
            $table->longText('about', 1024)->nullable();
            $table->longText('about_footer', 1024)->nullable();
            $table->string('image',1024)->nullable();
            $table->string('promotional_film',1024)->nullable();
            $table->enum('site', ['Plastik', 'Makine']);
            $table->string('language', 4)->default('tr');
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
        Schema::dropIfExists('abouts');
    }
};
