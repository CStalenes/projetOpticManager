<h2> Gestion stats</h2>



<?php 

    //$unControleur->setTable("Lunette"); 
    //$lesLunettes = $unControleur->selectAll();

    /*if(isset($_GET['action'])and isset($_GET['idLunette']))
    {
        $action = $_GET['action']; 
        $idLunette = $_GET['idLunette'];

        $unControleur->setTable("Lunette");

        //$tab = array("nb_total"=>$_POST['nb_total']);

        $total = $unControleur->selectLunette();

        if($donne = $total)
        {
            echo $donne['nb_total'];
        }
    */
        //$where = array("idLunette"=>$_GET['idLunette']);
        //$unControleur->maj($tab, $where); 
        //header("Location: index.php?page=10"); 
    //}


//require_once("vue/vue_lunette_homme.php")



    $unControleur->setTable("Lunette");
    $tab = array('quantite'=>$_POST['quantite']);

    $where = array('idLunette'=>$_GET['idLunette']);
    //$unControleur->maj($tab, $where);
    $total = $unControleur->selectLunette($tab, $where);
    var_dump($total);

    header("Location: index.php?page=10");
    
    //$total = $unControleur->selectLunette($tab, $where);
    //var_dump($total);

    //exit();
    
    echo '<table border = "1">';
    echo '<tr><td> total</td><td>'.$total.'</td></tr>';
    echo '</table>';
    




?>