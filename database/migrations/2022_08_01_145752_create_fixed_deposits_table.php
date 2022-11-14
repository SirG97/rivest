<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFixedDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixed_deposits', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->unsignedFloat('amount', 20, 2)->default(0);
            $table->unsignedFloat('amount_earned', 20, 2)->default(0);
            $table->unsignedFloat('withdrawn', 20, 2)->default(0);
            $table->integer('interest');
            $table->timestamp('duration');
            $table->string('status')->default('success');
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
        Schema::dropIfExists('fixed_deposits');
    }
}
