    <!-- debut header-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">


        <style>
            @import url('https://fonts.googleapis.com/css2?family=Advent+Pro:wght@100;200;300;400;500;600;700&family=Dancing+Script:wght@400;500;600;700&display=swap');
        body {
            background: url("image/glasses.jpg");
            background-size: cover;
        }
        #logo {
        font-family: 'Dancing Script', cursive;
        font-weight: bold;
        float: left;
        }
        </style>

        <title>Gestion des Opticien </title>
    </head>
    <body>
        <link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>

        <!-- <h1>Projet Opticien</h1> -->
        <header>
            <div class = "menu">
                <nav>
                    <ul>
                        <?php
                            echo ' <title id="logo"><a href="index.php?page=0">Optic</a></title>
                            <li> <a href="index.php?page=0" >Home</a> </li>
                            <li><a href="index.php?page=1" >Technicien</a> </li>
                            <li><a href="index.php?page=2" >Client</a> </li>
                            <li><a href="index.php?page=3" >Magasin</a> </li>
                            <li><a href="index.php?page=4" >Verre</a> </li>
                            <li><a href="index.php?page=5" >Montures</a> </li>
                            <li><a href="index.php?page=6" >Lunette</a> </li>
                            <li><a href="index.php?page=7" >RDV</a> </li>
                            <li><a href="index.php?page=8" >Reservation</a> </li>
                            <li><a href="index.php?page=10" >Stats</a> </li>

                            ';
                            if (isset($_SESSION['email'])){
                                echo'
                            <li><a href="index.php?page=9" >Déconnexion</a> </li>
                            ' ;
                        }else{
                                echo '<li><a href="index.php?page=9" >Connexion</a> </li>';
                            };
                        ?>

                    </ul>
                </nav>
            </div>
        </header>
        <section>
            <div class = "conteneur">
    <!-- fin header-->

            </div>

        <!-- debut footer-->

        </section>
        <footer>
            <div class = "conteneur">
                <?php echo date('Y');?> - Tous droits réservé CORIOLAN Stalenss DIABIRA Augustin

            </div>


        </footer>




    
        
    </body>
</html>
    <!-- fin footer-->