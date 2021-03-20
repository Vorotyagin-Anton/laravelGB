<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQueryDataFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('query_data_form', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer_name')->comment('Имя заказчика');
            $table->string('customer_phone')->comment('Телефон заказчика');
            $table->string('customer_email')->comment('Email заказчика');
            $table->text('requested_text')->comment('Информация о том, что хочет получить заказчик');
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
        Schema::dropIfExists('query_data_form');
    }
}
