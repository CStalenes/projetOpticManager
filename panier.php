


<?php
   
    if(!isset($_SESSION['email'])){
        require_once('connexion.php');
    }
?>





<?php
    /**On utilise ?> <?php quand on a 1 php inclus dans un autre  */
    /*$requete = "select a.idArticle, a.nomArticle, a.prixArticle
                from Panier p, Article a, Client c where a.idArticle = p.idArtcle 
                and p.idClient = c.'$idClient'; ";
    */



    /*
    $requete = "select a.idArticle, a.nomArticle, a.prixArticle
                from Panier p, Article a, Client c where a.idArticle = p.idArtcle 
                and p.idClient = c.idClient;";


    $res_request = $this->unPDO->prepare($requete);
    $res_request->execute(array($idPanier));
    
    */


    //$no_res_request = $res_request->fetch();
    
    /*
    echo '<pre>';
    var_dump($idClient);
    echo '<pre>';
    die();*/


    //$idClient = $_GET['idClient'];
    
    //$idArticle = $_GET['idArticle'];



    /*if(isset($idClient)){
        echo '$idClient';
    }else{
        echo 'erreur';
    }*/

    //$tab = [];

    //$row_user = $unControleur->insertPanier($idClient, $idArticle);
    
    
    /*$inserte_requete = null;
    if(isset($_GET['idUser']) && isset($_get['idArticle']))
    {
        $idArticle = $_GET['idArticle'];
        $idUser = $_GET['idUser'];


    }*/

    //$row_user = $unControleur->insertPanier($idUser, $idArticle);

    
    
    //require_once("add_panier.php");

   // $idUser = $_SESSION['idUser'];
   // $user_produit = "select a.idArticle, a.nomArticle, a.prixArticle
               // from Panier p, Article a, User u where a.idArticle = p.idArtcle 
               // and p.idClient = u.'$idUser';";

    //$data = array();   
    //$res_request->execute(array($idPanier));
         
    //$res_user_produit = $unControleur->unPDO->prepare($requete);
    //$res_user_produit->execute();
    $no_user = 0; //$res_user_produit->fetchColumn();


    
    $somme = 0;
    if($no_user == 0){

    ?>
        <script>
        window.alert("Error 404!");
        </script>
    <?php
    }else{
        //while($row_user = $res_user_produit->fetchAll()){
            //$somme = $somme + $row_user['prixArticle'];

        }
    
    

?>

<!DOCTYPE html>

    <head>

        <title>OpticManager </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->

        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>

    <body>
    
        <div>
            


            <br>


            <div class="container">
                <table class="table table-bordered table-striped">
                    <tbody>

                        <tr>
                            <th>ID Article </th><th>Nom Article</th><th>Prix </th><th> Opération </th>
                        </tr>
                        
                        <?php 

                       

                        /*$requete = "select a.idArticle, a.nomArticle, a.prixArticle
                        from Panier p, Article a, Client c where a.idArticle = p.idArtcle 
                        and p.idClient = c.idClient; ";
                        
                        $res_request = $unControleur->unPDO->prepare($requete);
                        $res_request->execute(array($idPanier));
                        $no_res_request = $res_request->fetch();*/

                        //$tab = [];

                        
                            //$insert = $unControleur->insertPanier($idClient, $idArticle);
                                  
                            //$res_user_produit = $unControleur->unPDO->prepare($requete);
                            //$res_user_produit->execute();
                            //$no_user = $res_user_produit->fetchColumn();

                            //$compteur = 1;



                           // while($row_user = $res_user_produit->fetchAll()){
                           
                        ?>

                        <tr>
                            <th><?php echo $compteur ?></th><th><?php echo 'lunettes'?></th><th><?php echo '435'?></th>
                            <th><a href='delete_panier.php?idPanier=<?php echo '45687' ?>'>Retirer</a></th>
                        </tr>
                       
                        <tr>
                            <th></th><th>Total</th><th>Rs <?php echo $somme;?>/-</th><th><a href="reussi.php?idPanier=<?php echo '45' ?>" class="btn btn-primary">Confirmer </a></th>
                        </tr>



                    </tbody>
                </table>
            </div>

            <br><br><br><br><br><br><br><br><br><br>


            
            
        </div>

          
    </body>

</html>
