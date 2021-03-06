<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (Schema::hasTable('contact')) {
            Schema::drop('contact');
        }

        Schema::create('contact', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('contact_name');
            $table->string('contact_email');
            $table->text('contact_message');
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
        Schema::dropIfExists('contact');
    }
}
