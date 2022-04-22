<?php

use App\Models\{Partner, Request, UserRole};
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('partner_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(UserRole::class)->constrained();
            $table->foreignIdFor(Request::class)->constrained();
            $table->foreignIdFor(Partner::class)->constrained();
            $table->string('relation');
            $table->string('direction');
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
        Schema::dropIfExists('partner_requests');
    }
}
