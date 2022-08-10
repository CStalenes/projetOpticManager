<h2> Liste des Client </h2>

<form method = "post" action = "">
    Mot de recherche : <input type = "text" name = "mot">
    <input type = "submit" name = "Rechercher" value = "Rechercher">

</form>
<br>

<table class = "table table-striped mt-3" border = "1">
    <thead>
        <tr>
            <td> Id Client </td> <td> Nom</td> <td> Prenom</td>
            <td> Adresse</td> <td>Email</td> <td> Age</td>  <td> Telephone</td>  <td> Operation </td> 
        </tr>

    </thead>
   
    <tbody>
        <?php
            foreach($lesClients as $unClient)
            {
                echo "<tr>";

                echo "  <td> ".$unClient['idPersonne']."</td>
                        <td> ".$unClient['nom']."</td>
                        <td> ".$unClient['prenom']."</td>
                        <td> ".$unClient['adresse']."</td>
                        <td> ".$unClient['email']."</td>
                        <td> ".$unClient['age']."</td>
                        <td> ".$unClient['telephone']."</td>"    
                ;

                echo "
                    <td> <a href='index.php?page=2&action=del&idPersonne=".$unClient['idPersonne']."'><img src='image/del.png' heigth='30' width='30'></a>
                    

                        <a href='index.php?page=2&action=edit&idPersonne=".$unClient['idPersonne']."'><img src='image/edit.png' heigth='30' width='30'></a>
                    </td>"
                ;

                echo "</tr>";

            }
        ?>

    </tbody>

   


</table>
<style>
         .hero-section
{
    width: 10%;
    height: 10vh;
    background: url("../image/fnd.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center ;


}
    </style>
