<h2> Liste des RDVS </h2>

<table class = "table table-striped mt-3" border="1">

	<thead>
		
		<tr>
			<td>Id RDV </td> <td> motif </td>  <td> dateRDV </td> <td> heuredebut </td> <td> heurefin </td>
			<td> nomClient </td> <td> nomMagasin </td>  <td> Operation </td> 
		</tr>
	</thead>
	
	<tbody>
		<?php
				foreach ($lesRDVs as $unRDV) {
					echo "<tr>";

					echo "  <td> ".$unRDV['idRDV']."</td>
							<td> ".$unRDV['motif']."</td>
							<td> ".$unRDV['dateRDV']."</td>
							<td> ".$unRDV['heuredebut']."</td>
							<td> ".$unRDV['heurefin']."</td>
							<td> ".$unRDV['nomCli']."</td>
							<td> ".$unRDV['nomMagasin']."</td>

							
					";

					echo "
					<td> <a href='index.php?page=7&action=del&idRDV=".$unRDV['idRDV']."'><img src='image/del.png' heigth='30' width='30'></a>
					

						<a href='index.php?page=7&action=edit&idRDV=".$unRDV['idRDV']."'><img src='image/edit.png' heigth='30' width='30'></a>
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