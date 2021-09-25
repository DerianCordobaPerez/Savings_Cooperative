<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movements', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->unsignedBigInteger('movement_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('transaction_id');
            $table->unsignedBigInteger('headings_id');
            $table->unsignedBigInteger('partner_id');
            $table->unsignedBigInteger('module_id');
            $table->double('value');
            $table->string('type');
            $table->string('quotation');
            $table->unsignedBigInteger('request_id');
            $table->unsignedBigInteger('operation_id');
            $table->timestamps();

            $table->foreign('partner_id')
                ->references('partner_id')->on('accounts')->cascadeOnUpdate()->cascadeOnDelete();

            $table->foreign('request_id')
                ->references('request_id')->on('accounts')->cascadeOnUpdate()->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movements');
    }
}
