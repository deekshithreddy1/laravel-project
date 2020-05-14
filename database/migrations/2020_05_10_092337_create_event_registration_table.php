<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_registration', function (Blueprint $table) {
            $table->increments('id');                   
            $table->string('name');
            $table->string('mobile_no');
            $table->string('gender');
            $table->string('CUST_ID');
            $table->string('email');
            $table->text('address');
            $table->tinyInteger('status')->default(0);
            $table->integer('fee');
            $table->string('order_id');
            $table->string('transaction_id')->default(0);

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
        Schema::dropIfExists('event_registration');
            // $table->increments('id');                   
            // $table->string('name');
            // $table->string('mobile_no');
            // $table->string('gender');
            // $table->string('email');
            // $table->text('address');
            // $table->tinyInteger('status')->default(0);
            // $table->integer('fee');
            // $table->string('order_id');
            // $table->string('transaction_id')->default(0);
            // $table->timestamps();
    }
}
