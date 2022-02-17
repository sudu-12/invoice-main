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
        Schema::create('inv_h_d_s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('InvNo');
            $table->string('ConsigneeId');
            $table->string('PlNo');
            $table->string('InvTerm');
            $table->string('GrossVlue');
            $table->string('Total_Gross_Wgt');
            $table->string('FreightRate');
            $table->float('FrieghtValue');
            $table->float('DiscountRate');
            $table->float('Discount_Value');
            $table->float('NetTotal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inv_h_d_s');
    }
};
