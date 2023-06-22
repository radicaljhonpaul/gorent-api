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
        Schema::table('contracts', function(Blueprint $table) {
            $table->unsignedBigInteger('booking_id')->nullable();
            $table->foreign('booking_id', 'booking_fk_1')->references('id')->on('bookings')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_1')->references('id')->on('users')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->unsignedBigInteger('car_id')->nullable();
            $table->foreign('car_id', 'car_fk_1')->references('id')->on('cars')
            ->onDelete('restrict')
            ->onUpdate('restrict');
		});

		Schema::table('back_cars', function(Blueprint $table) {
            $table->unsignedBigInteger('contract_id')->nullable();
			$table->foreign('contract_id', 'contract_fk_2')->references('id')->on('contracts')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->unsignedBigInteger('car_id')->nullable();
			$table->foreign('car_id', 'car_fk_2')->references('id')->on('cars')
            ->onDelete('restrict')
            ->onUpdate('restrict');
		});

		Schema::table('penalizations', function(Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_3')->references('id')->on('users')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->unsignedBigInteger('booking_id')->nullable();
			$table->foreign('booking_id', 'booking_fk_3')->references('id')->on('bookings')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->unsignedBigInteger('car_id')->nullable();
			$table->foreign('car_id', 'car_fk_3')->references('id')->on('cars')
            ->onDelete('restrict')
            ->onUpdate('restrict');
		});

		Schema::table('car_repairs', function(Blueprint $table) {
            $table->unsignedBigInteger('car_id')->nullable();
			$table->foreign('car_id', 'car_fk_4')->references('id')->on('cars')
            ->onDelete('restrict')
            ->onUpdate('restrict');
		});

		Schema::table('car_documents', function(Blueprint $table) {
            $table->unsignedBigInteger('car_id')->nullable();
            $table->foreign('car_id', 'car_fk_5')->references('id')->on('cars')
            ->onDelete('restrict')
            ->onUpdate('restrict');
		});

		Schema::table('user_profiles', function(Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_6')->references('id')->on('users')
            ->onDelete('restrict')
            ->onUpdate('restrict');
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foreign_keys');
    }
};
