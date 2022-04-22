<?php

use App\Models\{Partner, UserRole};
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(UserRole::class)->constrained();
            $table->foreignIdFor(Partner::class)->constrained();
            $table->date('date_of_admission');
            $table->unsignedBigInteger('module');
            $table->unsignedBigInteger('product');
            $table->unsignedBigInteger('branch_office');
            $table->unsignedBigInteger('office');
            $table->date('date');
            $table->string('direction');
            $table->string('observation');
            $table->string('status');
            $table->unsignedBigInteger('number_account');
            $table->double('amount');
            $table->double('cash');
            $table->double('check');
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
        Schema::dropIfExists('requests');
    }
}
