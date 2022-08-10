<h2> Liste des Techniciens </h2>

<table  class = "table table-striped mt-3" border = "1">
    
    <thead>
        <tr>
            <td> Id Technicien </td> <td> Nom</td> <td> Prenom</td>
            <td> Adresse</td> <td>Email</td> <td> Diplome</td> <td> Operation </td> 
        </tr>
    </thead>
  
    <tbody>
        <?php

        
            foreach($lesTechniciens as $unTechnicien)
            {
                echo "<tr>";

                echo "  <td> ".$unTechnicien['idPersonne']."</td>
                        <td> ".$unTechnicien['nom']."</td>
                        <td> ".$unTechnicien['prenom']."</td>
                        <td> ".$unTechnicien['adresse']."</td>
                        <td> ".$unTechnicien['email']."</td> 
                        <td> ".$unTechnicien['diplome']."</td>"
                ;

                echo "
                    <td> <a href='index.php?page=1&action=del&idPersonne=".$unTechnicien['idPersonne']."'><img src='image/del.png' heigth='30' width='30'></a>
                        <a href='index.php?page=1&action=edit&idPersonne=".$unTechnicien['idPersonne']."'><img src='image/edit.png' heigth='30' width='30'></a>
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
