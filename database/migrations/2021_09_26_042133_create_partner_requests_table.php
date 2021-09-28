<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_role_id');
            $table->unsignedBigInteger('request_id');
            $table->unsignedBigInteger('partner_id');
            $table->string('relation');
            $table->string('direction');
            $table->timestamps();

            $table->foreign('user_role_id')
                ->references('user_role_id')->on('requests')->cascadeOnUpdate()->cascadeOnDelete();

            $table->foreign('request_id')
                ->references('id')->on('requests')->cascadeOnUpdate()->cascadeOnDelete();

            $table->foreign('partner_id')
                ->references('partner_id')->on('requests')->cascadeOnUpdate()->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partner_requests');
    }
}
