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
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('mark', 10)->nullable();
			$table->string('model', 20);
			$table->string('category', 10);
			$table->string('color', 10);
			$table->string('power', 10);
			$table->string('capacity', 10);
			$table->date('purchase_date');
			$table->date('commissioning_date');
			$table->string('fuel', 20);
			$table->boolean('air_conditioner');
			$table->string('availability', 20);
            $table->timestamps();

            /**
             * Foreign Key (hasMany)
             * bookings_id
             * car_repairs_id
             * contracts_id
             * car_documents_id
             *
             * Foreign Key (hasOne)
             * user_profile_id
             *
             *
             */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
