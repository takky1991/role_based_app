<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdditionalFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table){
            $table->string('surname');
            $table->string('phone')->nullable()->default(null);
            $table->string('job_title')->nullable()->default(null);
            $table->string('company_name')->nullable()->default(null);
            $table->string('company_url')->nullable()->default(null);
            $table->string('company_size')->nullable()->default(null);
            $table->string('street_name')->nullable()->default(null);
            $table->string('building_number')->nullable()->default(null);
            $table->string('postal_code')->nullable()->default(null);
            $table->string('city')->nullable()->default(null);
            $table->string('country')->nullable()->default(null);
            $table->boolean('verified')->default(false);
            $table->string('token')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table){
            $table->dropColumn('surname');
            $table->dropColumn('phone');
            $table->dropColumn('job_title');
            $table->dropColumn('company_name');
            $table->dropColumn('company_url');
            $table->dropColumn('company_size');
            $table->dropColumn('street_name');
            $table->dropColumn('building_number');
            $table->dropColumn('postal_code');
            $table->dropColumn('city');
            $table->dropColumn('country');
        });
    }
}
