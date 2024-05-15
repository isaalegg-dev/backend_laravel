<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id('id');
            $table->string('backId');
            $table->string('contact_id');
            $table->string('contact_name');
            $table->float('amount');
            $table->text('desc');
            $table->integer('date');
            $table->string('change');
            $table->string('documentType');
            $table->integer('accountNum');
            $table->string('document_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
