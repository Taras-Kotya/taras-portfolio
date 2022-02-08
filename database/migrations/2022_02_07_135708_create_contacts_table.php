<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('welcome');
            $table->string('welcome_content');
            $table->string('name');
            $table->string('birthday');
            $table->string('specialty');
            $table->string('email');
            $table->string('number');
            $table->string('site');
            $table->string('city');
            $table->string('believer');
            $table->string('hobby');
            $table->string('soc_instagram');
            $table->string('soc_twitter');
            $table->string('soc_facebook');
            $table->string('soc_youtube');
            $table->string('soc_telegram');
            $table->integer('age');
            $table->integer('year_in_special');
            $table->integer('clients_in_special');
            $table->integer('project_in_special');
            $table->string('button_url');
            $table->string('button_name');
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
        Schema::dropIfExists('contacts');
    }
}
