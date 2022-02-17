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
        Schema::create('packing__list__d_t_l_s', function (Blueprint $table) {
            $table->id();
            $table->string('PlNo');
            $table->string('Item_Id');
            $table->string('Item_Description');
            $table->float('NoofBoxes');
            $table->float('GrossTotal');
            $table->float('NetTotal');
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
        Schema::dropIfExists('packing__list__d_t_l_s');
    }
};
