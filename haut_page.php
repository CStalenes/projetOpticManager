<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type = "text/css" href="css/style2.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">
        <link rel = "stylesheet" href = "https://use.fontawesome.com/releases/v5.15.4/css/all.css">
        <title>Gestion des Opticien </title>
    </head>
    
    <body>
        
            
        <nav>
            <input id = "nav-toggle" type = "checbox">
            <img class = "logo" src = "../Projet_Opticien-2/image/logo.png">

            <ul class = "links">
                <li><a href="index.php?page=0" >Home</a> </li>
                <li><a href="index.php?page=1" >Technicien</a> </li>
                <li><a href="index.php?page=2" >Client</a> </li>
                <li><a href="index.php?page=3" >Magasin</a> </li>
                <li><a href="index.php?page=4" >Verre</a> </li>
                <li><a href="index.php?page=5" >Montures</a> </li>
                <li><a href="index.php?page=6" >Lunette</a> </li>
                <li><a href="index.php?page=7" >RDV</a> </li>
                <li><a href="index.php?page=8" >Reservation</a> </li>

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
            <label for="nav-toggle" class="icon-burger"> 
                <div class="line"> </div>
                <div class="line"> </div>
                <div class="line"> </div>

            </label>
        </nav>

        <div class = "container">
            <img src = "../Projet_Opticien-2/image/fond.jpg">
        </div>
            

    
        <section>
            <div>