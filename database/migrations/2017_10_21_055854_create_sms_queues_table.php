<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSMSQueuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms_queues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fake_sender_name');
            $table->string('fake_sender_number')->default('310');
            $table->string('send_to');
            $table->string('message');
            $table->dateTime('send_time');
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
        Schema::dropIfExists('sms_queues');
    }
}
