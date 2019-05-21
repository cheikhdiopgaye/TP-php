<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Modifier un promo</title>
</head>
<body>
<center>
<h2 class="tete">SAISIR LES INSFORMATIONS SUR DU NOUVEAU PROMO</h2>
    <div class="ajout">

<?php
$code=$_GET["code"];
?>



<form class="form-horizontal"  method="POST" action="modifierpromo.php">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
            <label></label>
                <input  class="form-control" id="inputcode" placeholder="Code du promo" name="code">
            </div>
            <div class="col-lg-3"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
            <label></label>
                <input class="form-control" id="inputNom" placeholder=" Nom du promo" name="nom">
            </div>
            <div class="col-lg-3"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
            <label></label>
                <input type="text" class="form-control" id="inputNom" placeholder="Mois" name="mois">
            </div>
            <div class="col-lg-3"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
            <label></label>
                <input type="numer" class="form-control" id="inputNom" placeholder="Année" name="annee">
            </div>
            <div class="col-lg-3"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
        
                <button type="submit" class="btn btn-primary" name="modif" >Enregistrer </button>
            </div>
            <div class="col-lg-3"></div>
        </div>
        <br>
        
</form>
<h2 class="tete">Sonatel Academy</h2>
</center>
    

<style>

.tete{
    background-color:#7777;
    border: 1px solid blue;
    height:50px;
    line-height:50px;
    width:100%;
}
body{
    background-color:#2222
}
.liste{
text-align:center;
font-size: 18px;
background-color: white;
}


.titre{

}
.titre{
    text-align: center;
    background-color: grey;
    font-size: 20px;
}

.tete{
background-color:darkblue;
border: 2px solid blue;
height:80px;
line-height:80px;
width:100%;
color:white;
}
body{
background-color:blue;
}

.liste{
text-align:center;
font-size: 18px;
background-color: white;
}

.titre{
text-align: center;
background-color: grey;
font-size: 20px;
}
</style>
        
    </body>
    
    </html>