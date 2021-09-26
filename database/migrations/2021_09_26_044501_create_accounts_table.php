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
            $table->unsignedBigInteger('movement_id');
            $table->unsignedBigInteger('branch_office_id');
            $table->unsignedBigInteger('office_id');
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

            $table->foreign('module_id')
                ->references('module_id')->on('movements')->cascadeOnUpdate()->cascadeOnDelete();

            $table->foreign('movement_id')
                ->references('id')->on('movements')->cascadeOnUpdate()->cascadeOnDelete();

            $table->foreign('branch_office_id')
                ->references('branch_office_id')->on('movements')->cascadeOnUpdate()->cascadeOnDelete();

            $table->foreign('office_id')
                ->references('office_id')->on('movements')->cascadeOnUpdate()->cascadeOnDelete();

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
