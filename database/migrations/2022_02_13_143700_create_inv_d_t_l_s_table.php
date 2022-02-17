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
        Schema::create('inv_d_t_l_s', function (Blueprint $table) {
            $table->id();
            $table->string('No');
            $table->string('InvNo');
            $table->string('Item_Id');
            $table->string('Item_Description');
            $table->string('NoofBoxes');
            $table->string('GrossWgt');
            $table->string('UnitPrice');
            $table->string('UnitValue');
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
        Schema::dropIfExists('inv_d_t_l_s');
    }
};
