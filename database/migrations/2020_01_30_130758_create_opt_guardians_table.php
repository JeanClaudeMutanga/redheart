<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptGuardiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opt_guardians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student_id');
            $table->string('card');
            $table->string('name');
            $table->string('lastname');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->string('idnumber');
            $table->string('relation');
            $table->timestamps();
            
            $table->index("student_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opt_guardians');
    }
}
