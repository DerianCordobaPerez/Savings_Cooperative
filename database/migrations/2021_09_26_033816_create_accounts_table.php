<?php

use App\Models\{BranchOffice, Module, Movement, Office, Partner};
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Module::class)->constrained();
            $table->foreignIdFor(Movement::class)->constrained();
            $table->foreignIdFor(BranchOffice::class)->constrained();
            $table->foreignIdFor(Office::class)->constrained();
            $table->foreignIdFor(Partner::class)->constrained();
            $table->date('opening_date');
            $table->string('official_count');
            $table->enum('status', ['active', 'suspend']);
            $table->double('cash_balance');
            $table->double('check_balance_24');
            $table->double('check_balance_48');
            $table->double('check_balance');
            $table->double('notebook_balance');
            $table->date('date_of_last_movement');
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
        Schema::dropIfExists('accounts');
    }
}
