<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (Schema::hasTable('comments')) {
            Schema::drop('comments');
        }

        Schema::create('comments', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->integer('post_id');
            $table->string('comment_name');
            $table->string('comment_email');
            $table->text('comment_content');
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
        Schema::dropIfExists('comments');
    }
}
