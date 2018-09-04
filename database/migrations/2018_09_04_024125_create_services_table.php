<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('services')){
            
            Schema::create('services', function (Blueprint $table) {
            $table->increments('service_id');
            $table->string('service_title');
            $table->string('service_desc');
            $table->double('service_price',8,2);
            $table->int('service_mins');
            $table->timestamps();
        });
            
        }
       
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
