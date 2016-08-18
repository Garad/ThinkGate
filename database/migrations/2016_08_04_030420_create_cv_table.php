<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('name')->unique();
            $table->text('about_me');
            $table->string('passport');
            $table->string('birth_place');
            $table->date('date_birth');
            $table->string('nationality');
            $table->string('gender');
            $table->string('avatar');
            $table->string('uni_name');
            $table->string('course');
            $table->string('CGPA');
            $table->date('grad_year');
            $table->string('skill1');
            $table->string('skill2');
            $table->string('skill3');
            $table->string('skill4');
            $table->string('skill5');
            $table->string('skill6');
            $table->string('skill7');
            $table->string('skill8');
            $table->string('skill9');
            $table->string('skill10');
            $table->string('company_name1');
            $table->string('job_title1');
            $table->date('start_date1');
            $table->date('end_date1');
            $table->text('job_description1');
            $table->string('company_name2');
            $table->string('job_title2');
            $table->date('start_date2');
            $table->date('end_date2');
            $table->text('job_description2');
            $table->string('address_line');
            $table->string('zip');
            $table->string('city');
            $table->string('state');
            $table->string('email_address');
            $table->string('telephone');
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
        Schema::drop('cv');
    }
}
