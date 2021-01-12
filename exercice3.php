Exercice 3:
     Initialiser trois variables  puis les ranger
      dans l'ordre decroissant
<?php
$nbre1=rand(10,30);
$nbre2=rand(0,30);
$nbre3=rand(-30,0);

if ($nbre1 > $nbre2 > $nbre3){
    echo "ordre decroissant donne $nbre1, $nbre2, $nbre3";
} 
    if ($nbre2 > $nbre1>$nbre3){
      echo "ordre decroissant donne $nbre2,$nbre1,$nbre3";
    }
      if ($nbre3 > $nbre1 > $nbre2);
      echo "ordre decroissant donne $nbre3 > $nbre1 > $nbre2";
}
if ($nbre1 > $nbre3 > $nbre2){
    echo "ordre decroissant donne $nbre1, $nbre3, $nbre2";  
}
if ($nbre2 > $nbre3 > $nbre1){
    echo "ordre decroissant donne $nbre1, $nbre2, $nbre3"; 
}
if ($nbre3 > $nbre2 > $nbre1){
    echo "ordre decroissant donne $nbre1, $nbre2, $nbre3";
}     






 ?>