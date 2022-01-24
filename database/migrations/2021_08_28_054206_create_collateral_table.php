<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollateralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaterals', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->foreignId('user_id');
            $table->string('land_certificate_number')->nullable();
            $table->decimal('land_size', 20, 2)->nullable();
            $table->string('land_owner_name')->default(null)->nullable();
            $table->string('land_address')->default(null)->nullable();
            $table->string('land_phone')->default(null)->nullable();
            $table->string('vehicle_type')->default(null)->nullable();
            $table->string('vehicle_bpkb')->default(null)->nullable();
            $table->string('vehicle_stnk')->default(null)->nullable();
            $table->string('vehicle_owner_name')->default(null)->nullable();
            $table->string('vehicle_number')->default(null)->nullable();
            $table->string('vehicle_brand')->default(null)->nullable();
            $table->string('vehicle_year')->default(null)->nullable();
            $table->string('employee_certificate_number')->default(null)->nullable();
            $table->string('employee_owner_name')->default(null)->nullable();
            $table->string('employee_office')->default(null)->nullable();
            $table->string('employee_year')->default(null)->nullable();
            $table->decimal('valuation_price', 20, 2)->default(0)->nullable();
            $table->decimal('market_price', 20, 2)->default(0)->nullable();
            $table->string('notes')->default(null)->nullable();
            $table->string('image')->default(null)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collaterals');
    }
}
