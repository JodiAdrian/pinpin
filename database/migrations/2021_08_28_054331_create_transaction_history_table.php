<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_history', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('collateral_id')->nullable()->default(null);
            $table->string('city')->nullable()->default(null);
            $table->string('product')->nullable()->default(null);
            $table->decimal('credit_amount', 20, 2)->nullable()->default(null);
            $table->integer('period_of_time')->nullable()->default(null);
            $table->date('borrow_date')->nullable()->default(null);
            $table->date('approved_date')->nullable()->default(null);
            $table->date('due_date')->nullable()->default(null);
            $table->integer('loan_interest')->nullable()->default(null);
            $table->enum('status', ['Approved', 'Waiting'])->nullable()->default(null);
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
        Schema::dropIfExists('transaction_history');
    }
}
