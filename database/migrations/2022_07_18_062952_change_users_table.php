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
            $table->renameColumn('name', 'first_name');
            $table->renameColumn('surname', 'second_name');
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
            $table->renameColumn('first_name', 'name');
            $table->renameColumn('second_name', 'surname');
        });
    }
};
