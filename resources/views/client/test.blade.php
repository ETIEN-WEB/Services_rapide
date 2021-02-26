<?php
/* 
Votre annonce a été créée avec succès. Celle-ci va être validée par notre équipe avant d'être mise en ligne. Vous allez recevoir un email de confirmation, cliquez sur le lien pour accéder à votre annonce.

*/
* @return void
*/
public function up()
{
   Schema::create('villes', function (Blueprint $table) {
       $table->id();
       $table->string('nom_ville', 75);
       $table->string('espace_ville', 75);
       $table->timestamps();
   });
}

/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
   Schema::dropIfExists('villes');
}
}

?>



<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quartier extends Model
{
    //
    public function annonces()
    {
        return $this->hasMany('App\Annonce');
    }
}





class Ville extends Model
{
    //
    public function quartiers()
    {
        return $this->hasMany('App\Quartier');
    }

    /*public function annonces()
    {
        return $this->hasMany('App\Annonce');
    }*/
}





public function up()
    {
        Schema::create('quartiers', function (Blueprint $table) {
            $table->id();
            $table->text('nom_quartier');
            $table->string('espace_quartier', 75);
            $table->unsignedBigInteger('ville_id');
            $table->foreign('ville_id')->references('id')->on('villes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quartiers');
    }
}



            $table->unsignedBigInteger('quartier_id');
            $table->foreign('quartier_id')->references('id')->on('quartiers');


            $table->string('ville');
            $table->integer('quartier');


            /*-- très im^portant à ne pas éffacer --*/

            
                $aray= array ($phone->nom_phone, $phone->prix_phone, $phone->tag_id);
                $nb = sizeof($aray);
                echo '<ul>';  
                for ($i = 0; $i < $nb; $i++){
                    
                        if($aray[$i]!= '') {
                            
                            echo '<li style="margin-top: 10px;">'; 

                            echo $aray[$i];
                            
                            echo '</li>';
                            
                         }
                      
                }
                echo '</ul>'; 


     /*-- très im^portant à ne pas éffacer --*/
              


     {{date('d-m-y', 2547856320)}} 


     <?php
        $stamp= strtotime("2018-10-17 15:30:55");
        $ladate= getdate($stamp);

         $jd = $ladate['mon'];
         $j="";
switch($jd){
  case 1: $j= "jan";
  break;
  case 2: $j= "fev";
  break;
  case 3: $j= "mars";
  break;
  case 4: $j= "avr";
  break;
  case 5: $j= "mai";
  break;
  case 6: $j= "jun";
  break;
  case 7: $j= "jull";
  break;
  case 8: $j= "Août";
  break;
  case 9: $j= "sept";
  break;
  case 10: $j= "sept";
  break;
  case 11: $j= "nov";
  break;
  case 12: $j= "dec";
  default: $j= "Erreur";

}
   
echo "<br>";
            echo $ladate['mday'].", ".$j;
            echo "<br>";
        echo "L'heure est : ".$ladate['hours'].":".$ladate['minutes'];
        ?>



<div class="col-md-1">
    <form class=" " >
    <div class="form-group d-inline-flex p-0 ">
        <select class="form-control" name="q" >
            <option value=""> Villes </option>

            @foreach ($s_ville as $s_vills)
            @php
                if ($s_vills['id'] != '5') {
                    # code...
                echo '<option value="'.$s_vills['id'] .'">'. $s_vills['nom_ville'].'</option>';
            }
            @endphp
            @foreach ($s_vills->quartrs as $categ)
            @php
                if ($categ['id'] != '3') {
                    # code...
                echo '<option value="'.$categ['id'] .'">'. $categ['nom_quartier'].'</option>';
            }
            @endphp

            {{--
            @foreach ($s_ville as $s_vills)
            <option id="cat_g" value="{{$s_vills->id}}"> {{$s_vills->nom_ville}} </option>
            @foreach ($s_vills->quartrs as $categ)
            <option id="cat_ji" value="{{$categ->id}}"> {{$categ->nom_quartier}} </option>
            --}}

            @endforeach
            @endforeach
        </select>
        
    </div>
    
    <button class="btn btn-info p " type="submit"> </button>
    </form>
</div>


<div class="row col-md-12">
    <div class="col-md-6">
        
            <div class="files">
                7 jours  
            </div>   
        
        
            <div class="fileU">
              1 200fcfa/jour 
            </div>  
    </div>                                         
    <div class="col-md-6">
            <div class="fileU">
                Meilleure offre   
            </div>
        
            <div class="filets">
                 8 400fcfa  
            </div>
    </div>
</div>
