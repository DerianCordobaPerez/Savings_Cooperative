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
            $table->unsignedBigInteger('request_user_id');
            $table->double('amount');
            $table->boolean('cash');
            $table->boolean('check');
            $table->string('transfer');

            $table->foreign('request_user_id')
                ->references('user_id')->on('requests')->cascadeOnUpdate()->cascadeOnDelete();

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
        Schema::dropIfExists('account_requests');
    }
}
