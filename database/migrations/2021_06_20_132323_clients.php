<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('client_id', true);
            $table->string('client_name');
            $table->string('client_email');
            $table->integer('client_contact_number');
            $table->string('client_address');
            $table->string('client_project_name');
            $table->string('client_country');
            $table->string('client_city');
            $table->string('client_infromation');
            $table->string('client_idCard')->nulable();
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
