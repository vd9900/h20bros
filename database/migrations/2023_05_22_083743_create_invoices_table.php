<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("name");
            $table->string("send_to");
            $table->string("cc");
            $table->string("uniqId");
            $table->string("payment_method");
            $table->string("service_date");
            $table->string("total");
            $table->string("surchage");
            $table->string("notes");
            $table->string("status")->default("1");
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
        Schema::dropIfExists('invoices');
    }
};
