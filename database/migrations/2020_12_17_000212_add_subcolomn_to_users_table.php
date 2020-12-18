<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSubcolomnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('img_profile')->after('id')->nullable();
            $table->date('tanggal_lahir')->after('name')->nullable();
            $table->string('gender')->after('tanggal_lahir')->nullable();
            $table->string('no_hp')->after('email')->nullable();
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
            $table->dropColumn('img_profile');
            $table->dropColumn('tanggal_lahir');
            $table->dropColumn('gender');
            $table->dropColumn('no_hp');
        });
    }
}
