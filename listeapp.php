<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>liste des apprenants</title>
</head>
<body>
<center>
<h2 class="tete1"> LISTE DES APPRENANTS DE LA SONATEL ACADEMY</h2>
<br>
<br>
<?php

$prod=fopen("apprenants.txt", 'r' );
echo "<table class='tete' border='1px' width='87%' >";
echo "<tr class='titre'>

         <th>Code</th>
         <th>Nom</th>
         <th>Pénom</th> 
         <th>Date de naissance</th>
         <th>Numéro de télephone</th>
         <th>Adresse Email</th>
         <th>Promotion</th>
         <th>Statut</th>
         <th>Action</th>
         

</tr>";
while(!feof($prod)){
    $lines=fgets($prod);
    $fichier=explode(',', $lines);
    
   
        echo "<tr class='liste'>";				

        echo "<td>" . $fichier[0] . "</td>";
        echo "<td>" . $fichier[1] . "</td>";
        echo "<td>" . $fichier[2] . "</td>";
        echo "<td>" . $fichier[3] . "</td>";
        echo "<td>" . $fichier[4] . "</td>";
        echo "<td>" . $fichier[5] . "</td>";
        echo "<td>" . $fichier[6] . "</td>";
        echo "<td>" . $fichier[7] . "</td>";
        echo   '<td><a  href="editapp.php?code=$fichier[0]" class="btn btn-success" >Editer</a></td>';
        echo "</tr>";
    }

fclose($prod);
echo "</table>";

?>
<h2 class="tete1">Sonatel Academy</h2>
</center>
</div>
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