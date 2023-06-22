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
        Schema::create('contracts', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->date('rental_date');
			$table->date('start_date');
			$table->date('end_date');
			$table->string('payment_date', 30);
			$table->float('amount');
            $table->timestamps();

            /**
             * Foreign Key
             * cars_id
             * booking_id
             * users_id
             */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
