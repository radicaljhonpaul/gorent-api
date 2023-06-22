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
        Schema::create('car_documents', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->date('insurance_deadline');
			$table->date('next_technical_visit');
            $table->timestamps();

            /**
             * Foreign Key
             * cars_id
             */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_documents');
    }
};
