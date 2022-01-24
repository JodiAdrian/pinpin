<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('job_name')->nullable()->default(null);
            $table->string('office_name')->nullable()->default(null);
            $table->string('office_address')->nullable()->default(null);
            $table->integer('length_of_work')->nullable()->default(null);
            $table->decimal('total_income', 20, 2)->nullable()->default(null);
            $table->decimal('total_expenditure', 20, 2)->nullable()->default(null);
            $table->decimal('net_income', 20, 2)->nullable()->default(null);
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
        Schema::dropIfExists('employment');
    }
}
