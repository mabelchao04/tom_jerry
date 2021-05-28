<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->char('sex',1)->default('M')->after('password');
            $table->string('telephone')->nullable()->after('sex');
            $table->dateTime('birthday')->nullable()->after('telephone');
            $table->string('memo')->nullable()->after('birthday');
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
            $table->dripColumn('sex');
            $table->dripColumn('telephone');
            $table->dripColumn('birthday');
            $table->dripColumn('memo');
        });
    }
}
