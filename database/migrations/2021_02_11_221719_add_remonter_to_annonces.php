<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRemonterToAnnonces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('annonces', function (Blueprint $table) {
            //
            
            $table->integer('remonter');
            $table->integer('remonter1');
            $table->integer('remonter2');
            $table->integer('remonter3');
            $table->string('remonter4')->nullable();
            $table->timestamp('vipdate')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('annonces', function (Blueprint $table) {
            //
            $table->dropColumn('remonter');
            $table->dropColumn('remonter1');
            $table->dropColumn('remonter2');
            $table->dropColumn('remonter3');
            $table->dropColumn('remonter4');
            $table->dropColumn('vipdate');
        });
    }
}
