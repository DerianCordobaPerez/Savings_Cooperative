<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('references', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('partner_id');
            $table->string('type_of_reference');
            $table->string('name');
            $table->string('name_of_work');
            $table->string('mail');
            $table->unsignedBigInteger('telephone_id');
            $table->string('observation');
            $table->timestamps();

            $table->foreign('partner_id')
                ->references('id')->on('partners')->cascadeOnUpdate()->cascadeOnDelete();

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
        Schema::dropIfExists('references');
    }
}
