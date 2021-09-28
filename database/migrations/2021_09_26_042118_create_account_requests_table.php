<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_role_id');
            $table->unsignedBigInteger('request_id');
            $table->double('amount');
            $table->boolean('cash');
            $table->boolean('check');
            $table->string('transfer');
            $table->timestamps();

            $table->foreign('user_role_id')
                ->references('user_role_id')->on('requests')->cascadeOnUpdate()->cascadeOnDelete();

            $table->foreign('request_id')
                ->references('id')->on('requests')->cascadeOnUpdate()->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_requests');
    }
}
