<?php

$code=$_POST['code'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$naisse=$_POST['naiss'];
$tel=$_POST['tel'];
$mail=$_POST['email'];
$promo=$_POST['promo'];
$stat=$_POST['statut'];

$existe=false;    
$prod=fopen("apprenants.txt", 'a+' );
while (!feof($prod)){
$lines=fgets($prod);
$fichier=explode(',', $lines);
 if ($code==$fichier[0]){
     echo "Ce code appartient déjà à un apprenant";
     $existe=true;

}else {
    
    $inscrit="\n".$code.",".$nom.",".$prenom.",".$naisse.",".$tel.",".$mail.",".$promo.",".$stat.",";
    $existe=false;
    
}
//else{
  //  echo "Ce code appartient déjà à un apprenant. Veiller taper un autre code";
//}
}
if($existe=false){
fwrite($prod,$inscrit);
fclose($prod);   
header("location:listeapp.php");
}
?>
  