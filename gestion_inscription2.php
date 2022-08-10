<?php
    //require_once("index.php");
    $unControleur->setTable("user");
    $lesUsers = $unControleur->SelectAll();
    require_once("vue/vue_register.php");
    
    if(isset($_POST['Valider']))
{
    $unControleur->setTable("user");
    $tab=array("nom"=>$_POST['nom'],
                "prenom"=>$_POST['prenom'],
                "email"=>$_POST['email'],
                "mdp"=>$_POST['mdp'],
                "role"=>$_POST['role']

            );
    $unControleur->insert($tab);
}
?>