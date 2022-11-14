<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name')->nullable()->change();
            $table->string('first_name')->after('name');
            $table->string('last_name')->after('first_name');
            $table->string('pin');
            $table->string('occupation')->nullable();
            $table->string('dob')->nullable();
            $table->string('phone')->nullable();
            $table->string('sex')->nullable();
            $table->string('photo')->nullable();
            $table->string('cot')->nullable();
            $table->string('taxi')->nullable();
            $table->string('mlpc')->nullable();
            $table->string('tfpc')->nullable();

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
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('pin');
            $table->dropColumn('occupation');
            $table->dropColumn('dob');
            $table->dropColumn('phone');
            $table->dropColumn('sex');
            $table->dropColumn('photo');
            $table->dropColumn('cot');
            $table->dropColumn('taxi');
            $table->dropColumn('mlpc');
            $table->dropColumn('tfpc');
        });
    }
}
