<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {

            $table->id();

            $table->longText('style');

            $table->string('name');
            $table->string('slug');


            // !meta tag
            $table->string('SM_Title');
            $table->string('SM_Discription');
            $table->string('SM_Canonical');

            $table->string('OP_Title');
            $table->string('OP_Discription');
            $table->string('OP_Url');
            $table->string('OP_Property');

            $table->longText('body');

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
        Schema::dropIfExists('pages');
    }
}
