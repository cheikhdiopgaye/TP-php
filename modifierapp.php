<?php

$code=$_POST['code'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$naisse=$_POST['naiss'];
$tel=$_POST['tel'];
$promo=$_POST['promo'];
$mail=$_POST['email'];
$stat=$_POST['statut'];

    
$prod=fopen("apprenants.txt", 'r' );
    while(!feof($prod)){
      $lines=fgets($prod);
      $fichier=explode(',', $lines);

        if($code==$fichier[0]){
            $fichier[1]=$nom;
            $fichier[2]=$prenom;
            $fichier[3]=$naisse;
            $fichier[4]= $tel;
            $fichier[5]= $mail;
            $fichier[6]= $promo;
            $fichier[7]= $stat;

            $inscrit=$fichier[0].",".$fichier[1].",".$fichier[2].",".$fichier[3].",".$fichier[4].",".$fichier[5].",". $fichier[6].",".$fichier[7].","."\n";
        
        }else {
            $inscrit=$lines;
        }
       $newlines=$newlines.$inscrit;
    }

fclose($prod);
             $prod=fopen("apprenants.txt", 'w+' );
          
                  fwrite($prod,$newlines);
      
             fclose($prod);
    
header("location: listeapp.php#".$code);

?>