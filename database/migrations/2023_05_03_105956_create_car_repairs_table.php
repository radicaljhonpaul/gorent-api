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
        Schema::create('car_repairs', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->date('broken_down_date');
			$table->date('repair_date');
			$table->string('details');
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
        Schema::dropIfExists('car_repairs');
    }
};
