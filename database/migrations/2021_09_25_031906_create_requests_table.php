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
            $table->unsignedBigInteger('user_id');
            $table->date('date_of_admission');
            $table->unsignedBigInteger('partner_id');
            $table->unsignedBigInteger('module_id');
            $table->unsignedBigInteger('request_id');
            $table->unsignedBigInteger('operation_id');
            $table->date('date');
            $table->string('direction');
            $table->string('observation');
            $table->enum('status', ['active', 'suspend']);
            $table->unsignedBigInteger('account_id');
            $table->double('amount');
            $table->boolean('cash');
            $table->boolean('check');

            $table->foreign('user_id')
                ->references('id')->on('user_roles')->cascadeOnDelete()->cascadeOnUpdate();

            $table->foreign('partner_id')
                ->references('id')->on('partners')->cascadeOnUpdate()->cascadeOnDelete();

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
        Schema::dropIfExists('requests');
    }
}
