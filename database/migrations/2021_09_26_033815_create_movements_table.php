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
            $table->unsignedBigInteger('branch_office_id');
            $table->unsignedBigInteger('office_id');
            $table->unsignedBigInteger('module_id');
            $table->unsignedBigInteger('transaction_id');
            $table->unsignedBigInteger('headings_id');
            $table->unsignedBigInteger('partner_id');
            $table->unsignedBigInteger('account_id');
            $table->date('date')->unique();
            $table->double('value');
            $table->string('type');
            $table->string('quotation');
            $table->timestamps();

            $table->foreign('branch_office_id')
                ->references('branch_office_id')->on('offices')->cascadeOnDelete()->cascadeOnUpdate();

            $table->foreign('office_id')
                ->references('id')->on('offices')->cascadeOnDelete()->cascadeOnUpdate();

            $table->foreign('module_id')
                ->references('module_id')->on('headings')->cascadeOnDelete()->cascadeOnUpdate();

            $table->foreign('transaction_id')
                ->references('transaction_id')->on('headings')->cascadeOnUpdate()->cascadeOnDelete();

            $table->foreign('heading_id')
                ->references('id')->on('headings')->cascadeOnUpdate()->cascadeOnDelete();
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
