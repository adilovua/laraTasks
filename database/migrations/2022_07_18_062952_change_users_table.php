<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::table('users', function (Blueprint $table) {
            $table->string('region');
            $table->text('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('users', function(Blueprint $table){
            $table->dropColumn('region');
            $table->dropColumn('address');
            $table->string('name', 100)->change();
        });
    }
};
