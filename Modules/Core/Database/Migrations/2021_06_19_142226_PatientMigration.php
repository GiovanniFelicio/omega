<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PatientMigration extends Migration
{

    public function up()
    {
        Schema::create('omg_patient',function(Blueprint $table){

            $table->bigIncrements('id');
            $table->integer('code');
            $table->unsignedBigInteger('person_id');
            $table->foreign('person_id')->references('id')->on('omg_person');
            $table->timestamps();

        });
    }

    public function down()
    {
        //
    }
}
