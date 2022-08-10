<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type = "text/css" href="css/style3.css">

        <link rel = "stylesheet" href = "https://use.fontawesome.com/releases/v5.15.4/css/all.css">

        <link rel="stylesheet" type="text/css" media="@media only screen and (max-width:900px)" href="css/style3.css" />

        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">
        <title>Gestion des Opticien </title>
    </head>
    
    <body>
        
        <header class = "header-area">
            <div class = "header-container">
                <div class = "logo-site">
                    <img class = "logo" src = "../Projet_Opticien-2/image/logo.png">
                </div>

                <div class = "mobile-nav">
                    <i class = "fas fa-bars"></i>
                </div>

                <div class = "site-nav-menu">
                    
                    <ul class = "primary-menu">
                        <li><a href="index.php?page=0" class = "active" >Home</a> </li>
                        <li><a href="index.php?page=1" class = "">Technicien</a> </li>
                        <li><a href="index.php?page=2" class = "">Client</a> </li>
                        <li><a href="index.php?page=3" class = "" >Magasin</a> </li>
                        <li><a href="index.php?page=4" class = "" >Verre</a> </li>
                        <li><a href="index.php?page=5" class = "" >Montures</a> </li>
                        <li><a href="index.php?page=6" class = "" >Lunette</a> </li>
                        <li><a href="index.php?page=7" class = "" >RDV</a> </li>
                        <li><a href="index.php?page=8" class = "" >Reservation</a> </li>

                        <?php
                            if (isset($_SESSION['email'])){
                                echo'
                            <li><a href="index.php?page=9" >Déconnexion</a> </li>
                            ' ;
                            }else{
                                echo '<li><a href="index.php?page=9" >Connexion</a> </li>';
                            };
                        ?>

                    </ul>

                </div>

            </div>

            
        </header>  

        <section class = "hero-section"></section>
        
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
        <br>
        <br>
        <P> lA FIN DU HEADER</P>
        <br>
        <br>

        <div class = "yo">

        
        

