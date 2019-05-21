<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Incription</title>
</head>
<body>
<center>
<h2 class="tete">SAISIR LES INSFORMATIONS SUR L'APPRENANT</h2>
<form class="form-horizontal"  method="POST" action="inscrit.php">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
            <label></label>
                <input  class="form-control" id="inputcode" placeholder="Code de l'apprenant" name="code">
            </div>
            <div class="col-lg-3"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
            <label></label>
                <input class="form-control" id="inputNom" placeholder=" Nom de l'apprenant" name="nom">
            </div>
            <div class="col-lg-3"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
            <label></label>
                <input type="text" class="form-control" id="inputNom" placeholder="Prénom de l'apprenant" name="prenom">
            </div>
            <div class="col-lg-3"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
            <label></label>
                <input type="date" class="form-control" id="inputNom" placeholder="Date de naissance de l'apprenant" name="naiss">
            </div>
            <div class="col-lg-3"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
            <label></label>
                <input type="number" class="form-control" id="inputNom" placeholder="Numéro téléphone" name="tel">
            </div>
            <div class="col-lg-3"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
            <label></label>
                <input type="email" class="form-control" id="inputNom" placeholder="Addresse Email" name="email">
            </div>
            <div class="col-lg-3"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
            <label></label>
            <select class="form-control" placeholder="Selection le nom du promo" name="promo">
                 <option value=""></option>
                 <?php 
                 $prod=fopen("promo.txt",'r');
                 while(!feof($prod)){
                     $lines=fgets($prod);
                     $fichier=explode(',', $lines);
                     echo "<option  value=".$fichier[1].">".$fichier[1]."</option>";

                 }
                 fclose($prod);
                 ?>
             </select>
            </div>
            <div class="col-lg-3"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
            <label></label>
            <select class="form-control" name="statut">
                   <option>Formation</option>
                   <option>Stage</option>
                   <option>abandon</option>
                   <option>Blame</option>
            </select>
               
            </div>
            <div class="col-lg-3"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
        
                <button type="submit" class="btn btn-success" name="ajout" >Enregistrer </button>
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
</html>