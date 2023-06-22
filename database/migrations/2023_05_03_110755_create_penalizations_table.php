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
        Schema::create('penalizations', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('id_contract')->unsigned();
			$table->float('cost')->nullable();
			$table->string('reason', 50);
            $table->timestamps();

            /**
             * Foreign Key
             * cars_id
             * booking_id
             * user_id
             */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penalizations');
    }
};
