<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlasmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plasmas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->string('pin');
            $table->string('gender');
            $table->string('blood_group');
            $table->string('covid_positive_image');
            $table->string('recovered_date');
            $table->string('existing_disease')->nullable();
            $table->string('previous_donation');
            $table->string('hospital_admitted')->nullable();
            $table->string('hospital_name')->nullable();
            $table->string('approved');
            $table->string('identity');
            $table->string('identity_photo');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plasmas');
    }
}
