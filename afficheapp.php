<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<center>
<br>
<br>
<br>
<br>
<br>
<?php

$recherche=$_POST['rech'];
$prod=fopen("apprenants.txt", 'r' );
echo "<table class='tete' border='1px' width='87%'>";
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
    
   if($recherche==$fichier[6]){
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
   if($recherche==$fichier[0] && $fichier[7]!=abandon){
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
if($recherche==$fichier[1] && $fichier[7]!=abandon){
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
if($recherche==$fichier[2] && $fichier[7]!=abandon){
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
if($recherche==$fichier[7] && $fichier[7]!=abandon){
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
    }

fclose($prod);
echo "</table>";

?>
</center>
</div>
<style>
.tete{
    background-color:mediumorchid;
    border: 1px solid black;
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
.titre{
    text-align: center;
    background-color:mediumorchid; ;
    font-size: 19px;
}
</style>
    
</body>
</html>
    
</body>
</html>