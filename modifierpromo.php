<?php

    $code=$_POST['code'];
    $nom=$_POST['nom'];
    $mois=$_POST['mois'];
    $annee=$_POST['annee'];
    
$prod=fopen("promo.txt", 'r' );
    while(!feof($prod)){
      $lines=fgets($prod);
      $fichier=explode(',', $lines);

        if($code==$fichier[0]){
            $fichier[1]=$nom;
            $fichier[2]=$mois;
            $fichier[3]= $annee;
            

            
            $inscrit=$fichier[0].",".$fichier[1].",".$fichier[2].",".$fichier[3].","."\n";
        
        }else {
            $inscrit=$lines;
        }
       $newlines=$newlines.$inscrit;
    }

fclose($prod);
             $prod=fopen("promo.txt", 'w+' );
          
                  fwrite($prod,$newlines);
      
             fclose($prod);
    
header("location: listepromo.php#".$code);

?>