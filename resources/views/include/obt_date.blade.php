
<?php
$stamp= strtotime($anonc->created_at);
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







