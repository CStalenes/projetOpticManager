<h2> Gestion des Clients </h2>

<?php
    //$unControleur->setTable("Personne");
    //$lesPersonnes = $unControleur->selectAll();

    $unControleur->setTable("Client");//pas Client mais vue table personneTech
    $leClient = null;

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
                $where = array("idPersonne"=>$idPersonne);
                $unControleur->setTable("personneClient");
                $leClient = $unControleur->modifie($where);
            break;

        }

    }

    //insertion reussi


    require_once("vue/vue_insert_client3.php");


    /*  $unControleur->setTable("personneClient");
        $tab = array('idPersonne'=>$_POST['idPersonne'],
                        'nom'=>$_POST['nom'],
                        'prenom'=>$_POST['prenom'],
                        'adresse'=>$_POST['adresse'],
                        'email'=>$_POST['email'],
                        'age'=>$_POST['age'],
                        'telephone'=>$_POST['telephone']
    );*/

    if(isset($_POST['Modifier']))
    {
        $unControleur->setTable("Personne");
        $tab = array('nom'=>$_POST['nom'],
                        'prenom'=>$_POST['prenom'],
                        'adresse'=>$_POST['adresse'],
                        'email'=>$_POST['email']
        );
        
        $where = array('idPersonne'=>$_GET['idPersonne']);
        $unControleur->maj($tab, $where);

        $unControleur->setTable("Client");
        $tab = array('age'=>$_POST['age'],
                        'telephone'=>$_POST['telephone']
        );
        $where = array('idPersonne'=>$_GET['idPersonne']);
        $unControleur->maj($tab, $where);

        header("Location: index.php?page=2");
    }

    if(isset($_POST['Valider']))
    {
        $unControleur->setTable("personneClient");
        $tab = array(
                        'nom'=>$_POST['nom'],
                        'prenom'=>$_POST['prenom'],
                        'adresse'=>$_POST['adresse'],
                        'email'=>$_POST['email'],
                        'age'=>$_POST['age'],
                        'telephone'=>$_POST['telephone']

        );
        $unControleur->insertProc("insertClient",$tab);


        //$unControleur->setTable("personneClient");
        //pas Technicin mais vue personneTech
        /*$tab = array('idPersonne'=>$_POST['idPersonne'],
                    'nom'=>$_POST['nom'],
                    'prenom'=>$_POST['prenom'],
                    'adresse'=>$_POST['adresse'],
                    'email'=>$_POST['email'],
                    'age'=>$_POST['age'],
                    'telephone'=>$_POST['telephone']
        );
        $unControleur->insert($tab);
        */        
        
        //$unControleur->insertProc("insertClient", $tab);
    }
    

    $unControleur->setTable("personneClient");

    //require_once("vue/vue_insert_client2.php");

    /*if(isset($_POST["Rechercher"]))
    {
        $tab = array("nom", "prenom", "adresse", "email", "typerole","age", "telephone");
        $mot = $_POST["mot"];
        $lesClients = $unControleur->selectSearch($tab, $mot);
    }
    else
    {
        $lesClients = $unControleur->selectAll();
        
    }*/

    $lesClients = $unControleur->selectAll();

    require_once("vue/vue_les_clients.php");


?>