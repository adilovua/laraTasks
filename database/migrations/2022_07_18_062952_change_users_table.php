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
            $table->string('email')->comment('This is your e-mail')->change();
            $table->addColumn('integer','salary')->default(0);
            $table->addColumn('integer','age')->nullable()->unsigned();
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
        });
    }
};
