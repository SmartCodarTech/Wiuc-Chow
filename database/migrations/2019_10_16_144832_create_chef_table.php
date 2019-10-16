<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChefTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chef', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->integer('age');
            $table->string('phone');
            $table->string('address');
            $table->string('employed_date');
            $table->decimal('salary',6,0);
            $table->string('picture');
            $table->string('staff_position');
            $table->string('twiiter_account');
            $table->string('facebook_account');
            $table->string('ig_account');
            $table->string('gmail_account');
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
        Schema::dropIfExists('chef');
    }
}
