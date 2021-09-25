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
            $table->unsignedBigInteger('request_user_id');
            $table->unsignedBigInteger('request_partner_id');
            $table->string('relation');
            $table->string('direction');

            $table->foreign('request_user_id')
                ->references('user_id')->on('requests')->cascadeOnUpdate()->cascadeOnDelete();

            $table->foreign('request_partner_id')
                ->references('partner_id')->on('requests')->cascadeOnUpdate()->cascadeOnDelete();

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
        Schema::dropIfExists('partner_requests');
    }
}
