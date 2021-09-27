<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_role_id');
            $table->unsignedBigInteger('partner_id');
            $table->date('date_of_admission');
            $table->unsignedBigInteger('module');
            $table->unsignedBigInteger('product');
            $table->unsignedBigInteger('branch_office');
            $table->unsignedBigInteger('office');
            $table->date('date');
            $table->string('direction');
            $table->string('observation');
            $table->string('status');
            $table->unsignedBigInteger('number_account');
            $table->double('amount');
            $table->double('cash');
            $table->double('check');
            $table->timestamps();

            $table->foreign('user_role_id')
                ->references('id')->on('user_roles')->cascadeOnDelete()->cascadeOnUpdate();

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
        Schema::dropIfExists('requests');
    }
}
