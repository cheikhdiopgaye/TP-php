<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Liste des promos de la Sonatel Accademy</title>
</head>
<body>
<center>
<h2 class="tete1"> LISTE DES PROMOS DE LA SONATEL ACADEMY</h2>
<br>
<br>
<?php


echo "<table class='tete' border='1px' width='87%' >";
echo "<tr class='titre'>

         <th>Code</th>
         <th>Nom du promo</th>
         <th>Mois</th>
         <th>Années</th>
         <th>Nombre d'apprenant</th>
         <th>Action</th>
         

</tr>";
$prod=fopen("promo.txt", 'r' );

while(!feof($prod)){
    $lines=fgets($prod);
    $fichier=explode(',', $lines);
    $i=0;
    $tab=fopen("apprenants.txt", 'r');
  
        while(!feof($tab)){
            $li=fgets($tab);
            $app=explode(',', $li);
            
            if($fichier[1]==$app[6]){
            
             $i++;
             
            }
        }
    
        echo "<tr class='liste'>";			
        echo "<td>" . $fichier[0] . "</td>";
        echo "<td>" . $fichier[1] . "</td>";
        echo "<td>" . $fichier[2] . "</td>";
        echo "<td>" . $fichier[3] . "</td>";
        echo "<td>" . $i. "</td>";
        echo   '<td><a  href="editpromo.php?code=$fichier[0]" class="btn btn-success" >Modifier</a></td>';
       echo "</tr>"; 
       fclose($tab);
    } 
     
    
fclose($prod);
echo "</table>";

?>
<h2 class="tete1">Sonatel Academy</h2>
</center>
<style>
.tete{
    background-color:mediumorchid;
    border: 1px solid blue;
    height:50px;
    line-height:50px;
}
body{
    background-color:white;
}


.liste{
text-align:center;
font-size: 18px;
background-color: white;
color:black;
text-color:white;
}
.tete1{
    background-color:darkblue;
    border: 1px solid black;
    height:100px;
    line-height:80px;
    width:100%;
    color:white;
}
.titre{
    text-align: center;
    background-color:mediumorchid; ;
    font-size: 19px;
}
</body>
</html>