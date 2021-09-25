<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('movement_id');
            $table->unsignedBigInteger('request_id');
            $table->unsignedBigInteger('operation_id');
            $table->unsignedBigInteger('partner_id');
            $table->date('opening_date');
            $table->string('official_count');
            $table->enum('status', ['active', 'suspend']);
            $table->double('cash_balance');
            $table->double('check_balance_24');
            $table->double('check_balance_48');
            $table->double('check_balance');
            $table->double('notebook_balance');
            $table->date('date_of_last_movement');
            $table->timestamps();

            $table->foreign('request_id')
                ->references('id')->on('requests')->cascadeOnUpdate()->cascadeOnDelete();

            $table->foreign('partner_id')
                ->references('id')->on('partners')->cascadeOnUpdate()->cascadeOnDelete();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
