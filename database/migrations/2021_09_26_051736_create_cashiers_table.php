<?php

use App\Models\{BranchOffice, Office, UserRole};
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('cashiers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(UserRole::class)->constrained();
            $table->foreignIdFor(BranchOffice::class)->constrained();
            $table->foreignIdFor(Office::class)->constrained();
            $table->date('date');
            $table->unsignedInteger('type_of_transfer');
            $table->double('value');
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
        Schema::dropIfExists('cashiers');
    }
}
