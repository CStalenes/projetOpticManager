
<?php
    session_start();
    

    require_once("controleur/controleur.class.php");
    $unControleur = new Controleur();


    $idArticle = $_GET['idArticle'];
    $idUser = $_SESSION['idUser'];
    //$tab = [];

    //$unControleur->insertPanier($tab);



    //$tab = [];    

    //$unAjoutPanier = $unControleur->insertPanier($idClient, $idArticle);

    //$no_insert_produit = $unControleur->insertPanier($idClient, $idArticle);

    //$res_insert_produit = $unControleur->insertPanier($tab);
    $requete = "insert into Panier values(null,idUser = :'$idUser' ,idArticle = :'$idArticle',etatPanier = :'ajout-panier');";
    $donne = array(":idUser"=>$idUser,
            ":idArticle"=>$idArticle,
            ":etatPanier"=>'ajout-panier');
    $insert = $unControleur->unPDO->prepare($requete);
    $insert->execute($donne);


    


?>