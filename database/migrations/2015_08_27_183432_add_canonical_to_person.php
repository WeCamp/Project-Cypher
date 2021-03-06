<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddCanonicalToPerson extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'people',
            function (Blueprint $table) {
                $table->string('canonical', 255);
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(
            'people',
            function (Blueprint $table) {
                $table->dropColumn('canonical');
            }
        );
    }
}
