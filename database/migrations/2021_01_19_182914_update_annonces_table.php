<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('annonces', function (Blueprint $table) {
            $table->string('Annee')->nullable();
            $table->string('marque')->nullable();
            $table->string('Modele')->nullable();
            $table->string('Transmission')->nullable();
            $table->string('Carburant')->nullable();
            $table->string('Klometrage')->nullable();
            $table->string('nb_pieces')->nullable();
            $table->string('Superficie')->nullable();
            //$table->string('quartier')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $table->dropColumn('Annee');
        $table->dropColumn('marque');
        $table->dropColumn('Modele');
        $table->dropColumn('Transmission');
        $table->dropColumn('Carburant');
        $table->dropColumn('Klometrage');
        $table->dropColumn('nb_pieces');
        $table->dropColumn('Superficie');
       // $table->dropColumn('quartier');
        
    }
}
