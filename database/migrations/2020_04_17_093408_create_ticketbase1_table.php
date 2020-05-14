<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketbase1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticketbase1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('gender');
            $table->string('college');
            $table->string('hallticket');
            $table->string('department');
            $table->string('city');
            $table->string('district');
            $table->string('state');
            $table->string('payment');
            $table->string('checkbox');
            $table->timestamp('created_at')->nullable();
            
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticketbase1');
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('gender');
            $table->string('college');
            $table->string('hallticket');
            $table->string('department');
            $table->string('city');
            $table->string('district');
            $table->string('state');
            $table->string('payment');
            $table->string('checkbox');
            $table->timestamp('created_at')->nullable();
    }
}
