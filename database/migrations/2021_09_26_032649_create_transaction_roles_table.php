<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_roles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id');
            $table->unsignedBigInteger('role_id');
            $table->double('allowed_amount');
            $table->char('requires_authorization');
            $table->unsignedBigInteger('transaction_id');
            $table->timestamps();

            $table->foreign('module_id')
                ->references('module_id')->on('transactions')->cascadeOnUpdate()->cascadeOnDelete();

            $table->foreign('role_id')
                ->references('id')->on('roles')->cascadeOnUpdate()->cascadeOnDelete();

            $table->foreign('transaction_id')
                ->references('id')->on('transactions')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_roles');
    }
}
