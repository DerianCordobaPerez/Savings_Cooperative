<?php

use App\Models\{Currency, Module, Parameter};
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRateRangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('rate_ranges', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Module::class)->constrained();
            $table->foreignIdFor(Currency::class)->constrained();
            $table->foreignIdFor(Parameter::class)->constrained();
            $table->unsignedInteger('rate_type');
            $table->unsignedInteger('currency');
            $table->double('ride_from');
            $table->double('ride_to');
            $table->date('date_from');
            $table->date('date_to');
            $table->double('margin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('rate_ranges');
    }
}
