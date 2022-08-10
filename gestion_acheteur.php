<h2> Gestion des acheteurs </h2>

<?php
	if (isset($_SESSION['email']) and $_SESSION['role']=="admin") {
		$unControleur->setTable("acheteur"); 
		$leAcheteur = null; 

		if (isset($_GET['action']) and isset($_GET['idacheteur']))
		{
			$action = $_GET['action']; 
			$idacheteur = $_GET['idacheteur'];

			switch ($action)
			{
				case "del" : 
					$where = array("idacheteur"=>$idacheteur); 
					$unControleur->delete ($where); 
				break;
				
				case "edit" : 
					$where = array("idacheteur"=>$idacheteur); 
					$leAcheteur = $unControleur->selectWhere($where); 
				break; 
			} 
		}


		require_once ("vue/vue_insert_acheteur.php");
		if(isset($_POST['Modifier']))
		{
			$unControleur->setTable("acheteur");
			$tab = array("nom"=>$_POST['nom'], 
						 "prenom"=>$_POST['prenom'], 
                         "adresse"=>$_POST['adresse'], 
                         "email"=>$_POST['email']);
			$where = array("idacheteur"=>$_GET['idacheteur']);
			$unControleur->update($tab, $where); 
			//header("Location: index.php?page=5"); 
		}

		if(isset($_POST['Valider']))
		{
			$unControleur->setTable("acheteur");
			$tab = array("nom"=>$_POST['nom'], 
						 "prenom"=>$_POST['prenom'], 
                         "adresse"=>$_POST['adresse'], 
                         "email"=>$_POST['email']);
			$where = array("idacheteur"=>$_GET['idacheteur']);
			$unControleur->insert($tab); 
		}
	}
	
	$unControleur->setTable("acheteur"); 
	if (isset($_POST['Rechercher']))
	{
		$tab = array("nom", "prenom","adresse","email"); 
		$mot = $_POST['mot']; 
		$lesAcheteurs = $unControleur->selectSearch($tab, $mot); 
	}
	else
	{
		$lesAcheteurs = $unControleur->selectAll();
	}
	require_once ("vue/vue_acheteur.php"); 
?>
















