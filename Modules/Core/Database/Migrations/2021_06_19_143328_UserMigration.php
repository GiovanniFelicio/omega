<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omg_user',function(Blueprint $table){

            $table->bigIncrements('id');
            $table->string('name')->nullable(false);
            $table->string('username')->unique()->nullable(false);
            $table->string('email')->unique()->nullable(false);
            $table->string('password')->nullable(false);
            $table->boolean('active')->default(true);
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
        //
    }
}
