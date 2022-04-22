<?php

use App\Models\{Currency, Module};
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('parameters', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Module::class)->constrained();
            $table->foreignIdFor(Currency::class)->constrained();
            $table->char('library');
            $table->char('checks');
            $table->char('account_status');
            $table->char('pay_interest');
            $table->char('td_allows');
            $table->char('overdraft_allows');
            $table->unsignedInteger('calculation_basis');
            $table->unsignedInteger('passive_rate');
            $table->unsignedInteger('active_rate');
            $table->double('minimum_opening_balance');
            $table->double('minimum_balance');
            $table->double('maximum_balance');
            $table->unsignedInteger('cut_cycle');
            $table->char('allows_low_minimum_retention');
            $table->unsignedInteger('number_of_days_of_immobilization');
            $table->unsignedInteger('product_immobilizes');
            $table->text('description');
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
        Schema::dropIfExists('parameters');
    }
}
