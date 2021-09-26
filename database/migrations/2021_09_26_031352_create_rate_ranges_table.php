<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRateRangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rate_ranges', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id');
            $table->unsignedBigInteger('currency_id');
            $table->unsignedBigInteger('parameter_id');
            $table->unsignedInteger('rate_type');
            $table->unsignedInteger('currency');
            $table->double('ride_from');
            $table->double('ride_to');
            $table->date('date_from');
            $table->date('date_to');
            $table->double('margin');
            $table->timestamps();

            $table->foreign('module_id')
                ->references('module_id')->on('parameters')->cascadeOnDelete()->cascadeOnUpdate();

            $table->foreign('currency_id')
                ->references('currency_id')->on('parameters')->cascadeOnDelete()->cascadeOnUpdate();

            $table->foreign('parameter_id')
                ->references('id')->on('parameters')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rate_ranges');
    }
}
