<?php

use App\Models\{Account, BranchOffice, Heading, Module, Office, Partner, Transaction};
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('movements', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(BranchOffice::class)->constrained();
            $table->foreignIdFor(Office::class)->constrained();
            $table->foreignIdFor(Module::class)->constrained();
            $table->foreignIdFor(Transaction::class)->constrained();
            $table->foreignIdFor(Heading::class)->constrained();
            $table->foreignIdFor(Partner::class)->constrained();
            $table->date('date')->unique();
            $table->double('value');
            $table->string('type');
            $table->string('quotation');
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
        Schema::dropIfExists('movements');
    }
}
