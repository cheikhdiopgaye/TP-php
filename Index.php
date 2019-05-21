<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>accueil</title>
</head>
<body>
    <div style="width: 100%; height: 130px;  margin-top:2px; border:1px solid black; background-color: darkblue; ">
      <br>
      <div class="col-lg-6">
      <form method="POST" action="afficheapp.php">
         
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
            <label></label>
                <input class="form-control" id="inputNom" placeholder="Recherche" name="rech">
            </div>
              <br>
            <div class="col-lg-5">
            <button type="submit" class="btn btn-primary" name="ajout" >Recherche </button>
            
            </form>
        </div>
       
      </div>
      <br>
      
      <div class="col-lg-6">
      <form method="POST" action="">
            <div class="col-lg-3">
                  <button type="submit" class="btn btn-success" name="inscrire" >Inscrir un apprenant </button>
            </div>
            <div class="col-lg-3">
                  <button type="submit" class="btn btn-success" name="ajout2" >Ajouter un promo</button>
            </div>
              <div class="col-lg-3">
                   
                    <button type="submit" class="btn btn-success" name="promo" >Liste des promos </button>
                        
              </div>
            <div class="col-lg-3">
        
            <button type="submit" class="btn btn-success" name="app" >Liste des apprenants </button>
            </div>
           
     </form>
     </div>
    </div>
   <div>
   <div class="image">
   <center>
   <img class="photo" src="image/im1.png">
   </center>
   </div>
   <div style="width: 100%; height: 100px;  margin-top:2px; border:1px solid black; background-color: darkblue; ">
    </div>
    <?php     
    
    if(isset($_POST['promo'])){
        header("location:listepromo.php");
    }
    
    ?>
    <?php     
    
    if(isset($_POST['app'])){
        header("location:listeapp.php");
    }
    
    ?>
     <?php     
    
    if(isset($_POST['inscrire'])){
        header("location:inscription.php");
    }
    
    ?>
     <?php     
    
    if(isset($_POST['ajout2'])){
        header("location:ajoutpromo1.php");
    }
    
    ?>
</body>
<style>
.photo{
    width:40%;
    height:80%;

}
</style>
</html>