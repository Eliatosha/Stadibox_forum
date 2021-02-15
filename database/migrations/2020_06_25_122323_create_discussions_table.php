<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscussionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discussions', function (Blueprint $table) { 
            $table->id();
            $table->integer('user_id');
            $table->string ('Title');
            $table->text('content');
            $table->string('slug')->unique();//the representation of the title
            $table->integer('channel_id');//these are topics eg Kusoma,kuhesabu,kuandika
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
        Schema::dropIfExists('discussions');
    }
}
