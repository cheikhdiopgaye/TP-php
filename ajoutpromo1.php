<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Incription</title>
</head>
<body>

<center>
<h2 class="tete">SAISIR LES INSFORMATIONS SUR DU NOUVEAU PROMO</h2>
<br>
<br>
<br>
<br>

<form class="form-horizontal"  method="POST" action="ajoutpromo2.php">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
            <label></label>
                <input  class="form-control" id="inputcode" placeholder="Code du promo" name="code1">
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
        
                <button type="submit" class="btn btn-success" name="modif" >Enregistrer </button>
            </div>
            <div class="col-lg-3"></div>
        </div>
        <br>
        
</form>
       
<h2 class="tete">Sonatel Academy</h2>
</div>
</center>
</body>

<style>

body{
    background-color:blue;
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


</style>
</html>