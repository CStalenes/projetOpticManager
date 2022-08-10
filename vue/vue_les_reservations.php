<h2> Liste des Reservations </h2>


<form method = "post" action = "">
    Mot de recherche : <input type = "text" name = "mot">
    <input type = "submit" name = "Rechercher" value = "Rechercher">

</form>
<br>

<table class = "table table-striped mt-3" border="1">

	<thead>
		<tr>
			<td>Id Reservation </td> <td> Horaire </td>  <td> Nom Client </td> <td> Prix Lunette  <td> Operation </td> 
		</tr>

	</thead>


	<tbody>
		<?php
				foreach ($lesReservations as $uneReservation) {
					echo "<tr>";

					echo "  <td> ".$uneReservation['idReservation']."</td>
							<td> ".$uneReservation['horaire']."</td>
							<td> ".$uneReservation['nomClient']."</td>
							<td> ".$uneReservation['prixLunette']."</td>

							
					";

					echo "
					<td> <a href='index.php?page=8&action=del&idReservation=".$uneReservation['idReservation']."'><img src='image/del.png' heigth='30' width='30'></a>
					

						<a href='index.php?page=8&action=edit&idReservation=".$uneReservation['idReservation']."'><img src='image/edit.png' heigth='30' width='30'></a>
					</td>";

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