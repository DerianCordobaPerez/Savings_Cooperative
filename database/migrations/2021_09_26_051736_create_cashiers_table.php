<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashiers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_role_id');
            $table->unsignedBigInteger('branch_office_id');
            $table->unsignedBigInteger('office_id');
            $table->date('date');
            $table->unsignedInteger('type_of_transfer');
            $table->double('value');
            $table->timestamps();

            $table->foreign('user_role_id')
                ->references('id')->on('user_roles')->cascadeOnDelete()->cascadeOnUpdate();

            $table->foreign('branch_office_id')
                ->references('branch_office_id')->on('offices')->cascadeOnDelete()->cascadeOnUpdate();

            $table->foreign('office_id')
                ->references('id')->on('offices')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cashiers');
    }
}
