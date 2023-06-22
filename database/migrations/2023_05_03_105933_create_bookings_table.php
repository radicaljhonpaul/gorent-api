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
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('last_name', 10)->nullable();
			$table->string('first_name', 10)->nullable();
			$table->string('registration_number', 20);
			$table->date('booking_date');
            $table->timestamps();

            /**
             * Foreign Key
             * cars_id
             * contract_id
             */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
