<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('partner_id');
            $table->string('type_of_company');
            $table->string('company_name');
            $table->date('date_of_admission');
            $table->unsignedBigInteger('direction_id');
            $table->unsignedBigInteger('telephone_id');
            $table->string('function');
            $table->string('type_of_contract');
            $table->string('position');
            $table->timestamps();

            $table->foreign('partner_id')
                ->references('id')->on('partners')->cascadeOnUpdate()->cascadeOnDelete();

            $table->foreign('direction_id')
                ->references('id')->on('directions')->cascadeOnUpdate()->cascadeOnDelete();

            $table->foreign('telephone_id')
                ->references('id')->on('telephones')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
