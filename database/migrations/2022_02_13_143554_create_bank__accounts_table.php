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
        Schema::create('bank__accounts', function (Blueprint $table) {
            $table->id();
            $table->string('Account_name');
            $table->string('Account_no');
            $table->string('Bank');
            $table->string('Branch');
            $table->string('SwiftCode');
            $table->string('CorrespondingBank');
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
        Schema::dropIfExists('bank__accounts');
    }
};
