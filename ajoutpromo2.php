<?php

    $code=$_POST['code1'];
    $nom=$_POST['nom'];
    $mois=$_POST['mois'];
    $annee=$_POST['annee'];
$trouve=false;
    
$prod=fopen("promo.txt", 'a+' );
while (!feof($prod)){
    $lines=fgets($prod);
    $fichier=explode(',', $lines);
    if ($fichier[0]==$code){
        echo "Ce code appartient déjà à un promo existant";
        die("hhhhhhh");
        $trouve=true;
    }
   else {

       $inscrit="\n".$code.",".$nom.",".$mois.",".$annee.",";
      $trouve=false;
    }

}
if($trouve==false){
    fwrite($prod,$inscrit);
    fclose($prod);   
    header("location: listepromo.php");
}

?>
  