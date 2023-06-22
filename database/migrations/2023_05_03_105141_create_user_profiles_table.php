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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name', 100);
			$table->string('last_name', 100);
			$table->date('registration_date');
			$table->date('date_of_birth');
			$table->string('address', 255);
			$table->bigInteger('phone_number');
			$table->string('gender', 12);
            $table->timestamps();
            /**
             * Foreign Key
             * user_id
             */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profiles');
    }
};
