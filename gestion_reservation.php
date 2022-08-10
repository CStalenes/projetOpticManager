<h2> Gestion des Reservations </h2>

<?php

	/*$unControleur->setTable("Personne"); 
	$lesPersonnes = $unControleur->selectAll();*/

    $unControleur->setTable("Personne");
    $lesPersonnes = $unControleur->selectAll(); 

	//$unControleur->setTable("Client"); 
	//$lesClients = $unControleur->selectAll(); 

    $unControleur->setTable("Lunette"); 
	$lesLunettes = $unControleur->selectAll(); 

	$unControleur->setTable("Reservation"); 
	$laReservation = null; 

	if (isset($_GET['action']) and isset($_GET['idReservation']))
	{
		$action = $_GET['action']; 
		$idReservation = $_GET['idReservation'];

		switch ($action)
		{
			case "del" : 
				$where = array("idReservation"=>$idReservation);
				 
				$unControleur->supprime($where); 
			break;
		
			case "edit" : 
				$where = array("idReservation"=>$idReservation);
				//$laReservation = $unControleur->selectWhere($where); 
				$laReservation = $unControleur->modifie($where);
				 
			break; 
		} 
	}

	require_once("vue/vue_insert_reservation.php");
    
	if(isset($_POST['Modifier']))
	{
		
		$unControleur->setTable("Reservation");
		$tab = array("horaire"=>$_POST['horaire'],
					"idPersonne"=>$_POST['idPersonne'],
					 "idLunette"=>$_POST['idLunette']
		);
		$where = array("idReservation"=>$_GET['idReservation']);
		$unControleur->maj($tab, $where);
		
		/*$unControleur->setTable("Personne");//auparavant Technicien
        $tab = array(
                        'nom'=>$_POST['nom'],
                        'prenom'=>$_POST['prenom'],
                        'adresse'=>$_POST['adresse'],
                        'email'=>$_POST['email']
        );
        
        $where = array('idPersonne'=>$_GET['idPersonne']);//pour modification dans requete where
        $unControleur->maj($tab, $where);

		$unControleur->setTable("Lunette");
		$tab = array("libelle"=>$_POST['libelle'], 
					"couleur"=>$_POST['couleur'],
					 "genre"=>$_POST['genre'],
					 "marque"=>$_POST['marque'], 
					 "prix"=>$_POST['prix'],
					 "quantite"=>$_POST['quantite'], 
					 "disponibilite"=>$_POST['disponibilite'], 
                     "idVerre"=>$_POST['idVerre'], 
					 "idMonture"=>$_POST['idMonture']
		);
		$where = array("idLunette"=>$_GET['idLunette']);
		$unControleur->maj($tab, $where); 
		*/


		/*$unControleur->setTable("reservationCL");
		$tab = array("horaire"=>$_POST['horaire'],
						"nomClient"=>$_POST['nomClient'],
						"emailClient"=>$_POST['emailClient'],
						"designation"=>$_POST['designation'], 
					 	"marqueLunette"=>$_POST['marqueLunette'], 
					 	"prixLunette"=>$_POST['prixLunette'],
						"dispoLunette"=>$_POST['dispoLunette'], 

		);
		$where = array("idReservation"=>$_GET['idReservation']);
		$unControleur->maj($tab, $where);*/

		/*$unControleur->setTable("reservationCL");
		$tab = array("horaire"=>$_POST['horaire'],
						"nom"=>$_POST['nom'],
						"email"=>$_POST['email'],
						"libelle"=>$_POST['libelle'], 
					 	"marque"=>$_POST['marque'], 
					 	"prix"=>$_POST['prix'],
						"disponibilite"=>$_POST['disponibilite'], 

		);
		$where = array("idReservation"=>$_GET['idReservation']);
		$unControleur->maj($tab, $where);*/


		header("Location: index.php?page=8"); 
	}

	if(isset($_POST['Valider']))
	{
		
		
		/*$unControleur->setTable("Reservation");
		$tab = array("horaire"=>$_POST['horaire'],
					"idPersonne"=>$_POST['idPersonne'],
					"idLunette"=>$_POST['idLunette'] 
					
		);
		$unControleur->insert($tab);
		*/

		$unControleur->setTable("Reservation");
		$tab = array("horaire"=>$_POST['horaire'],
						"idPersonne"=>$_POST['idPersonne'],
					 	"idLunette"=>$_POST['idLunette']

		);
		

		/*$unControleur->setTable("reservationCL");
		$tab = array("horaire"=>$_POST['horaire'],
						"nomClient"=>$_POST['nomClient'],
						"emailClient"=>$_POST['emailClient'],
						"designation"=>$_POST['designation'], 
					 	"marqueLunette"=>$_POST['marqueLunette'], 
					 	"prixLunette"=>$_POST['prixLunette'],
						"dispoLunette"=>$_POST['dispoLunette'], 

		);*/
		
		$unControleur->insert($tab);
	}

	$unControleur->setTable("reservaCL"); 

	if (isset($_POST['Rechercher']))
	{
		//$tab = array("horaire", "idPersonne","heuredebut", "heurefin", "Personne", "Magasin"); 
		$tab = array("horaire", "nomClient", "prixLunette"); 
		$mot = $_POST['mot']; 
		$lesRDVs = $unControleur->selectSearch($tab, $mot); 
	}
	else
	{
		$lesRDVs = $unControleur->selectAll();
	}
	
	$lesReservations = $unControleur->selectAll();

	require_once("vue/vue_les_reservations.php"); 
?>
