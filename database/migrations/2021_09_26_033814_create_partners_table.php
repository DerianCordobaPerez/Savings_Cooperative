<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('type_id');
            $table->string('identification');
            $table->string('user_name');
            $table->string('relation');
            $table->string('economic_group');
            $table->double('tax_exonerated');
            $table->string('assured_relationship');
            $table->string('branch_of_origin');
            $table->string('office_of_origin');
            $table->date('date_of_admission');
            $table->string('executive');
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
        Schema::dropIfExists('partners');
    }
}
