<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNaturalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naturals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('partner_id');
            $table->string('paternal_surname');
            $table->string('maternal_surname');
            $table->string('names');
            $table->string('nationality');
            $table->string('profession');
            $table->enum('educational_level', ['initial', 'primary', 'high_school', 'higher']);
            $table->string('marital_status');
            $table->date('date_of_birth');
            $table->string('type_of_dwelling');
            $table->unsignedInteger('dependency_number');
            $table->enum('status', ['active', 'suspend']);
            $table->string('economic_sector');
            $table->string('main_activity');
            $table->string('secondary_activity');
            $table->string('occupation');
            $table->timestamps();

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
        Schema::dropIfExists('naturals');
    }
}
