<h2> Liste des Montures</h2>

<table class = "table table-striped mt-3" border="1">
		<thead>
			<tr>
				<td>Id Monture </td>
				<td> Forme </td> <td> Matiere </td>  <td> Operation </td>
			</tr>
		</thead>

	
		<tbody>
			<?php
				foreach ($lesMontures as $uneMonture) {
					echo "<tr>";

					echo "  <td> ".$uneMonture['idMonture']."</td>
							<td> ".$uneMonture['forme']."</td>
							<td> ".$uneMonture['matiere']."</td>
					";

					echo "
					<td> <a href='index.php?page=5&action=del&idMonture=".$uneMonture['idMonture']."'><img src='image/del.png' heigth='30' width='30'></a>
					

						<a href='index.php?page=5&action=edit&idMonture=".$uneMonture['idMonture']."'><img src='image/edit.png' heigth='30' width='30'></a>
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