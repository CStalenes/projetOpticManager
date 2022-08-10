<?php
   
    require_once("controleur/controleur.class.php");
    require_once("controleur/config_bdd.php");
  
    
    
    $unControleur = new Controleur($db_host, $db_db, $db_user, $db_password);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style3.css">
    <link rel = "stylesheet" href = "https://use.fontawesome.com/releases/v5.15.4/css/all.css">

        <link rel="stylesheet" type="text/css" media="@media only screen and (max-width:900px)" href="css/style3.css" />

        <!-- Fontawesome cdn  -->


        <!-- Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">
        <style>           
            input[type=submit] {
                background-color: #04AA6D;
                color: white;
                display: inline-block;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            
            input[type=submit]:hover {
                background-color: #45a049;
            }

            input[type=reset] {
                background-color: #f44336;
                color: white;
                display: inline-block;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            
            input[type=reset]:hover {
                background-color: #d62839;
            }

        </style>
    <title>Optic</title>
</head>
<body>
    <!-- Fontawesome cdn  -->


        <!-- Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">

       

        <title>Gestion des Opticien </title>
    </head>
    
    
        
        <header class = "header-area">
            <div class = "header-container">
                <div class = "logo-site">
                    <img class = "logo" src = "image/logo.png">
                </div>

                <div class = "mobile-nav">
                    <i class = "fas fa-bars"></i>
                </div>

                <div class = "site-nav-menu">
                    
                    <ul class = "primary-menu">
                        <li><a href="index.php?page=0" class = "" >Home</a> </li>
                     

                        <?php
                            if (isset($_SESSION['email']) && $_SESSION['typerole']=='admin'){
                                echo'
                        <li><a href="index.php?page=1" class = "">Technicien</a> </li>
                        <li><a href="index.php?page=2" class = "">Client</a> </li>
                        <li><a href="index.php?page=3" class = "" >Magasin</a> </li>
                        <li><a href="index.php?page=4" class = "" >Verre</a> </li>
                        <li><a href="index.php?page=5" class = "" >Montures</a> </li>
                        <li><a href="index.php?page=6" class = "" >Lunette</a> </li>
                        <li><a href="index.php?page=7" class = "" >RDV</a> </li>
                        <li><a href="index.php?page=8" class = "" >Reservation</a> </li>

                        ' ;}else{
                            echo '
                            <li><a href="index.php?page=14" class = "" >Lunettes de soleil</a> </li>
                            <li><a href="index.php?page=11" class = "" >Lunettes de vue</a> </li>
                            <li><a href="index.php?page=12" class = "" >Panier</a> </li>'
                        ;}; ?>

                        <?php
                            if (isset($_SESSION['email'])){
                                echo'
                            <li><a href="index.php?page=9" >Déconnexion</a> </li>
                            ' ;
                            }else{
                                echo '<li><a href="index.php?page=13" >Connexion</a> </li>';
                            };

                          
                        ?>

                    </ul>

                </div>

            </div>

            
        </header>  

        
        <section class = "hero-section">
            <div class = "banner-text">
              

            </div>
        </section>
        <div class = "conteneur">
    <!-- fin header-->

            </div>

        
        <!-- Jquery cdn -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function()
            {
                $(".mobile-nav i").click(function()
                {
                    $(".site-nav-menu").toggleClass("mobile-menu");
                });
            })
        </script>
       

        
        <!-- le main affichage bdd -->
        <?php
                   
        if(isset($_POST['SeConnecter']))
            {
                $where = array("email"=>$_POST['email'],
                                "mdp"=>$_POST['mdp']);
                $unControleur->setTable("user");
                $unUser = $unControleur->modifie($where);
                //var_dump($unUser);

                if (isset($unUser['email']))
                {
                    $_SESSION['email']= $unUser['email'];
                    $_SESSION['typerole']= $unUser['typerole'];
                    //header("Location: home.php");
                    var_dump($_SESSION);
                }else{
                    echo "<br/> Veuillez verifier vos identifiants";
                }
            }


            
            if (isset($_SESSION['email']) && $_SESSION['typerole']=='admin'){
                if(isset($_GET['page']))
                {
                    $page = $_GET['page'];
                }
                else{
                    $page = 0;
                }

                switch($page)
                {
                    /*case 0:require_once("home.php"); break;
                    case 1:require_once("gestion_inscrit.php"); break;
                    case 2:require_once("gestion_technicien.php"); break;
                    case 3:require_once("gestion_client.php"); break;
                    case 4:require_once("gestion_magasin.php"); break;
                    case 5:require_once("gestion_monture.php"); break;
                    case 6:require_once("gestion_verre.php"); break;
                    case 7:require_once("gestion_lunette.php"); break;
                    case 8:require_once("gestion_rdv.php"); break;
                    case 9:require_once("gestion_reservation.php"); break;
                    case 10:require_once("gestion_inscription.php"); break;*/

                    case 0:require_once("home.php"); break;
                    case 1:require_once("gestion_technicien.php"); break;
                    case 2:require_once("gestion_client.php"); break;
                    case 3:require_once("gestion_magasin.php"); break;
                    case 4:require_once("gestion_verre.php"); break;
                    case 5:require_once("gestion_monture.php"); break;
                    case 6:require_once("gestion_lunette.php"); break;
                    case 7:require_once("gestion_rdv.php"); break;
                    case 8:require_once("gestion_reservation.php"); break;
                    //case 10:require_once("gestion_stats.php"); break;
                    case 9:unset($_SESSION); session_destroy(); break;
                }


                }
                else{
                if(isset($_GET['page']))
                {
                    $page = $_GET['page'];
                }
                else{
                    $page = 0;
                }

                switch($page)
                {
                    case 0:require_once("home.php"); break;
                    case 9:unset($_SESSION); session_destroy(); break;
                    case 10:require_once("gestion_technicien.php"); break;
                    case 11:require_once("lunettedevue.php"); break;
                    case 12:require_once("panier.php"); break;
                    case 13:require_once("connexion.php"); break;
                    case 14:require_once("lunettedesoleil.php"); break;
                }
                }
                // if (isset($_SESSION['email']) && $_SESSION['typerole']=='user')
        ?>



        <!-- debut footer-->

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

    
      

        <footer class = "foot">
            <div class = "container-foot">
              

                <div class = "row"> 
                  
                    <div class = "footer-col">
                        <h4> Entreprise </h4>
                        <ul>
                            <li> <a href="#"> A Propos</a></li>
                            <li> <a href="#"> Service</a></li>
                        </ul>
                    </div>

                    <div class = "footer-col">
                        <h4> Aide </h4>
                        <ul>
                            <li> <a href="#"> FAQ</a></li>
                            <li> <a href="#"> retour </a></li>
                            <li> <a href="#"> payement</a></li>
                        </ul>
                    </div>

                    <div class = "footer-col">
                        <h4> Achat en ligne</h4>
                        <ul>
                            <li> <a href="#"> Lunette Vue</a></li>
                            <li> <a href="#"> Lunette Soleil</a></li>
                        </ul>
                    </div>

                    <div class = "footer-col">
                        <h4> Nous suivre </h4>
                        <div class = "social-link">
                            <a href="#"> <i class= "fab fa-facebook-f"></i></a>
                            <a href="#"> <i class= "fab fa-twitter"></i></a>
                            <a href="#"> <i class= "fab fa-linkedin-in"></i></a>

                        </div>
                    </div>

                    
                </div>
                <br>
                <br>
                <?php echo date('Y');?> - <p class = "mention"> Tous droits réservé CORIOLAN Stalenes DIABIRA Augustin </p>

            </div>


        </footer>

</body>
</html>