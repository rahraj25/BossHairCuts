<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('applicant', function (Blueprint $table) {
            $table->increments('applicant_id');
            $table->string('applicant_email',30);
            $table->string('applicant_firstname',30);
            $table->string('applicant_surname',30);
            
            $table->string('applicant_contact');
            $table->string('applicant_password');
            $table->string('applicant_type',50);
            $table->text('applicant_file_url')->nullable();
            $table->text('applicant_memo')->nullable();

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
        Schema::dropIfExists('applicant');
    }
}
