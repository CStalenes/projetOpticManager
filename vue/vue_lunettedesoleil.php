<?php
    require_once("controleur/controleur.class.php");
   

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>OpticManager</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        
    </head>
    
<style>
    

    .hero-section
{
    width: 10%;
    height: 10vh;
    background: url("../image/fnd.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center ;


}
</style>
    <body>
      
        <div>
           
           

            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="panier.php">
                            <img src="image/l5.jpg" width="250" height="150"  alt="LunetteVue">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Lunettes de Soleil ROGG11CD </h3>
                                    <p>Prix: 1000 EUR</p>

                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="connexion.php" role="button" class="btn btn-primary btn-block">Acheter</a></p>
                                        <?php
                                        }
                                        else{
                                            if($unControleur->verifAddPanier(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ajouter au panier </a>';
                                        }else{
                                            ?>
                                            <a href="add_panier.php?idArticle=1" class="btn btn-block btn-primary" name="ajouter" value="ajouter" class="btn btn-block btr-primary">Ajouter au panier</a>
                                            <?php
                                        }
                                    }
                                    ?>
                                    
                                    
                                </div>
                            </center>
                        </div>
                    </div>


                    
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="panier.php">
                            <img src="image/l7.png" width="250" height="150"  alt="LunetteVue">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Lunettes de soleil </h3>
                                    <p>Prix: 500 EUR</p>

                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="connexion.php" role="button" class="btn btn-primary btn-block">Acheter</a></p>
                                        <?php
                                        }
                                        else{
                                            if($unControleur->verifAddPanier(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ajouter au panier </a>';
                                        }else{
                                            ?>
                                            <a href="panier.php" class="btn btn-block btn-primary" name="ajouter" value="ajouter" class="btn btn-block btr-primary">Ajouter au panier</a>
                                            <?php
                                        }
                                    }
                                    ?>
                                    
                                    
                                </div>
                            </center>
                        </div>
                    </div>

                    
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="panier.php">
                            <img src="image/l8.png" width="250" height="150"  alt="LunetteVue">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Lunette de Soleil ROG 201CD </h3>
                                    <p>Prix: 700 EUR</p>

                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="connexion.php" role="button" class="btn btn-primary btn-block">Acheter</a></p>
                                        <?php
                                        }
                                        else{
                                            if($unControleur->verifAddPanier(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ajouter au panier </a>';
                                        }else{
                                            ?>
                                            <a href="add_panier.php?idArticle=3" class="btn btn-block btn-primary" name="ajouter" value="ajouter" class="btn btn-block btr-primary">Ajouter au panier</a>
                                            <?php
                                        }
                                    }
                                    ?>
                                    
                                    
                                </div>
                            </center>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="panier.php">
                            <img src="image/l9.png" width="250" height="150"  alt="LunetteSoleil">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Lunettes de soleil ROG PL00CD </h3>
                                    <p>Prix: 800 EUR</p>

                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="connexion.php" role="button" class="btn btn-primary btn-block">Acheter</a></p>
                                        <?php
                                        }
                                        else{
                                            if($unControleur->verifAddPanier(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Ajouter au panier </a>';
                                        }else{
                                            ?>
                                            <a href="add_panier.php?idArticle=4" class="btn btn-block btn-primary" name="ajouter" value="ajouter" class="btn btn-block btr-primary">Ajouter au panier</a>
                                            <?php
                                        }
                                    }
                                    ?>
                                    
                                    
                                </div>
                            </center>
                        </div>
                    </div>


                    

            


                        
                   

                   
                </div>
                
            </div>
            


        </div>
      

    </body>
   
</html>
