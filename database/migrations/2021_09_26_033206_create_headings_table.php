<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('module_id');
            $table->unsignedBigInteger('transaction_id');
            $table->text('description');
            $table->text('mnemonic');
            $table->char('movement_type');
            $table->timestamps();

            $table->foreign('module_id')
                ->references('module_id')->on('transactions')->cascadeOnUpdate()->cascadeOnDelete();

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
        Schema::dropIfExists('headings');
    }
}
