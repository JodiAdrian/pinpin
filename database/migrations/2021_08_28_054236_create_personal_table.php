<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('id_number')->nullable()->default(null);
            $table->string('tax_number')->nullable()->default(null);
            $table->string('account_number')->nullable()->default(null);
            $table->string('name')->nullable()->default(null);
            $table->string('place_of_birth')->nullable()->default(null);
            $table->date('birth_date')->nullable()->default(null);
            $table->string('gender')->nullable()->default(null);
            $table->string('address')->nullable()->default(null);
            $table->string('province')->nullable()->default(null);
            $table->string('city')->nullable()->default(null);
            $table->string('districts')->nullable()->default(null);
            $table->string('postal_code')->nullable()->default(null);
            $table->string('religion')->nullable()->default(null);
            $table->string('no_handphone')->nullable()->default(null);
            $table->string('image_id')->nullable()->default(null);
            $table->string('tax_image')->nullable()->default(null);
            $table->string('selfie_image')->nullable()->default(null);
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
        Schema::dropIfExists('personals');
    }
}
