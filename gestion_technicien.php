<h2> Gestion des Techniciens </h2>

<?php
    //$unControleur->setTable("Personne");
    //$lesPersonnes = $unControleur->selectAll();
    
    //$leTechnicien = null;
    $unControleur->setTable("Technicien");//pas Technicien mais vue table personneTech //auparavant Technicien
    $leTechnicien = null;

    if(isset($_GET['action']) and isset($_GET['idPersonne']))
    {
        $action = $_GET['action'];
        $idPersonne = $_GET['idPersonne'];

        switch($action)
        {
            case "del":
                $where = array("idPersonne"=>$idPersonne);
                $unControleur->supprime($where);
            break;

            case 'edit':
                $unControleur->setTable("personneTech");
                $where = array("idPersonne"=>$idPersonne);
                $leTechnicien = $unControleur->modifie($where);
            break;

        }
    }

    require_once("vue/vue_insert_technicien.php");

    if(isset($_POST['Modifier']))
    {
        $unControleur->setTable("Personne");//auparavant Technicien
        $tab = array(
                        'nom'=>$_POST['nom'],
                        'prenom'=>$_POST['prenom'],
                        'adresse'=>$_POST['adresse'],
                        'email'=>$_POST['email']
        );
        
        $where = array('idPersonne'=>$_GET['idPersonne']);//pour modification dans requete where
        $unControleur->maj($tab, $where);

        $unControleur->setTable("Technicien");
        $tab = array(
            'diplome'=>$_POST['diplome']
        );
        $where = array('idPersonne'=>$_GET['idPersonne']);
        $unControleur->maj($tab, $where);


        header("Location: index.php?page=1");
        
    }

    if(isset($_POST['Valider']))
    {
        /*$unControleur->setTable("Personne");
        $tab = array(
                        'nom'=>$_POST['nom'],
                        'prenom'=>$_POST['prenom'],
                        'adresse'=>$_POST['adresse'],
                        'email'=>$_POST['email']
        );
        $unControleur->insert($tab);
        */
        
        
        
        $unControleur->setTable("personneTech");//pas Technicin mais vue personneTech
        //$unControleur->setProc("insertTech");
        $tab = array(
                    'nom'=>$_POST['nom'],
                    'prenom'=>$_POST['prenom'],
                    'adresse'=>$_POST['adresse'],
                    'email'=>$_POST['email'],
                    'diplome'=>$_POST['diplome']
        );
        
        //$unControleur->insert($tab); 
        //$unControleur->setProc("insertTech");

        //on ne peut pas faire d insertion avec une vue

        $unControleur->insertProc("insertTech",$tab);
       
        /* var_dump($tab);
        var_dump($cle);
        var_dump($valeur);*/
        
    }

    $unControleur->setTable("personneTech");//il faut utiliser la jointure entre tech et personne personneTech pas Technicien

    $lesTechniciens = $unControleur->selectAll();

    require_once("vue/vue_les_techniciens.php");


?>