<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAccountToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('account_no')->nullable();
            $table->string('r_password')->nullable();
            $table->string('otp')->nullable();
            $table->integer('no_of_otp')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('account_no');
            $table->dropColumn('r_password');
            $table->dropColumn('otp');
            $table->dropColumn('no_of_otp');
        });
    }
}
