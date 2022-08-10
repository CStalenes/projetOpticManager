<?php

    class Modele{

        private $unPdo, $uneTable;
        public function __construct($db_host, $db_db, $db_user, $db_password)
        {
            $this->unPdo = null;
            try{
                $this->unPdo = new PDO("mysql:host=".$db_host.";dbname=".$db_db, $db_user, $db_password);
            }
            catch (PDOException $exp){
                echo "Erreur de connexion:".$exp->getMessage();
            }
        }

        public function setTable($uneTable)
        {
            $this->uneTable = $uneTable;
        }

        public function getTable()
        {
            return $this->uneTable;
        }

        /*public function setProc($procedure)
        {
            $this->procedure = $procedure;
        }

        public function getProc()
        {
            return $this->procedure;
        }*/
        

        public function selectAll()
        {
            $requete = "select * from " .  $this->uneTable . ";";
            $select = $this->unPdo->prepare($requete); 
            $select->execute();
            return $select->fetchAll();
        }

        public function insert($tab)
		{
			$champs = array(); 
			$donnees = array(); 
			foreach ($tab as $cle => $valeur) {
				 $champs[] = ":".$cle;
				 $donnees[":".$cle] = $valeur; 
			}
			$chaineChamps = implode(",", $champs); 

			$requete ="insert into ". $this->uneTable ." values (null,".$chaineChamps.");" ;
			 
			$select = $this->unPdo->prepare($requete);
			$select->execute($donnees); 
		}

        public function supprime($where){
            $champs=array();
            $donnees=array();
            foreach($where as $cle=>$valeur){
                $champs[]=$cle." = :".$cle;
                $donnees[":".$cle]=$valeur;
            }
            $chaineWhere=implode(" and ", $champs);

            $requete="delete from ".$this->uneTable." where ".$chaineWhere;
            $delete=$this->unPdo->prepare($requete);
            $delete->execute($donnees);
        }
        // Modification des tables, je n'étais pas sur du probléme au début du coup j'ai également rajouter une fonction maj
        
        public function modifie($where)
		{
			$champs = array(); 
			$donnees = array(); 
			foreach ($where as $cle => $valeur) {
				$champs[] = $cle ." = :".$cle;
				$donnees [":".$cle] = $valeur;  
			}
			$chaineWhere = implode (" and ", $champs); 

			$requete = "select * from  ".$this->uneTable."  where ".$chaineWhere;
            var_dump($donnees);
            echo $requete;
			 
			$select = $this->unPdo->prepare ($requete);
			$select->execute ($donnees);
			return $select->fetch (); 
		}
        
        // le probléme venait de la fonction update
        public function maj($tab, $where)
		{
			$champs = array(); 
			$donnees = array(); 
			foreach ($where as $cle => $valeur) {
				$champs[] = $cle ." = :".$cle;
				$donnees [":".$cle] = $valeur;  
			}
			$chaineWhere = implode (" and ", $champs); 

			$champs2 =array();
			foreach ($tab as $cle => $valeur) {
				$champs2[] = $cle ." = :".$cle;
				$donnees [":".$cle] = $valeur;
			}
			$chaineChamps=implode(", ", $champs2);

			$requete = "update  ".$this->uneTable." set ".$chaineChamps." where ".$chaineWhere;
			 
			$update = $this->unPdo->prepare ($requete);
			$update->execute ($donnees);
		}
    

        
      
        public function selectSearch($tab, $mot)
		{
			$champs = array(); 
			$donnees = array(":mot"=>"%".$mot."%"); 
			foreach ($tab as $cle) {
				$champs [] = $cle ." like :mot";
			}
			$chaineWhere = implode("  or  " , $champs); 
			$requete = "select * from ".$this->uneTable."  where ".$chaineWhere; 
			$select = $this->unPdo->prepare($requete);
			$select->execute ($donnees);
			return $select->fetchAll(); 
		}

        public function insertProc($procedure,$tab)
        {
            $champs = array(); 
            $donnees = array(); 
            foreach ($tab as $cle => $valeur) {
                $champs[] = ":".$cle;
                $donnees[":".$cle] = $valeur; 
            }
            $chaineChamps = implode(",", $champs); 

            $requete ="call ".$procedure."(".$chaineChamps.");";

            $select = $this->unPdo->prepare($requete);
            $select->execute($donnees);
        }


        // Panier


    

    public function add($product_id)
    {
        if (isset($_SESSION['panier'][$product_id])) {
            $_SESSION['panier'][$product_id]++;
        } else {
            $_SESSION['panier'][$product_id] = 1;
        }
    }

    public function del($product_id)
    {
        unset($_SESSION['panier'][$product_id]);

    }

    public function nbProduct(){  // nombre de produit dans le panier
        return array_sum($_SESSION['panier']);
    }

    public function total()
    {
        $total = 0;
        $ids = array_keys($_SESSION['panier']);
        if(empty($ids)){
            $products =[];
        } else {
            $products = $this->database->query('select id, price from products where id in (' . implode(',', $ids) . ')');
        }

        foreach ($products as $product) {
                 $total+= $product->price*$_SESSION['panier'][$product->id];
        }
        return $total;
    }

    public function verifAddPanier($idArticle){
        
        //$verif_produit = $this->unPDO->prepare("select * from Panier where idArticle = : and etatPanier =  'ajout-panier';");
        //$verif_produit = $this->unPDO->prepare($requete);
        //$verif_produit->execute(array($idArticle));

        //$numPanier = $verif_produit->fetch();
        //if($numPanier >= 1) return 1;
        return 0;
    }



      
    public function afficheClient()
    {
        $requete = "select m.nom, m.adresse, count(p.idPersonne) as nbtotal_client
        from Personne p, Magasin m
        where m.idPersonne = p.idPersonne
        group by m.nom, m.adresse ;";
        $select = $this->unPdo->prepare($requete); 
        $select->execute();
        return $select->fetchAll();
    }

    public function selectLunette($tab, $where)
    {
        /*$requete = "select sum(quantite) as nb_total from" .  $this->uneTable . " where genre like  'homme' ;";
        $select = $this->unPdo->prepare($requete); 
        $select->execute();
        return $select->fetchAll();*/

        //$champs = array(); 
        //$donnees = array(); 
        
        /*foreach ($tab as $cle => $valeur) {
             $champs[] = ":".$cle;
             $donnees[":".$cle] = $valeur; 
        }
        */
        //$chaineChamps = implode(",", $champs);


        $champs = array(); 
        $donnees = array(); 
        foreach ($where as $cle => $valeur) {
            $champs[] = $cle ." = :".$cle;
            $donnees [":".$cle] = $valeur;  
        }
        $chaineWhere = implode (" and ", $champs); 

        $champs2 =array();
        foreach ($tab as $cle => $valeur) {
            $champs2[] = $cle ." = :".$cle;
            $donnees [":".$cle] = $valeur;
        }
        $chaineChamps=implode(", ", $champs2);
         
        //$homme = $_GET['genre'];
        //$requete ="select sum(quantite) as nb_total from ". $this->uneTable ." where 'genre' = '".$homme."' ;" ;
        
        $requete ="select sum(quantite) as ".$chaineChamps." from ". $this->uneTable ." where ".$chaineWhere.";" ;

        $select = $this->unPdo->prepare($requete);
        $select->execute($donnees); 
        //$select->execute();
        //return $select->fetchAll();
    }


        




    }




?>