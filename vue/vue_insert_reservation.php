<h2> Insertion d'une Reservation  </h2>

<div class = "container">
    <div class = "row pt-4">
        <form action="" method = "POST" class = "form-horizontal col-md-6 pt-4">
            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> horaire </label>
                <div class = "col-sm-10">
                    <input type = "text"  name ="horaire" class = "form-control" id ="input1" value =" <?php if($laReservation!= null) echo $laReservation['horaire'];?>">
                </div>
            </div>

           
			<div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> Nom Client </label>
                <div class = "col-sm-10">
                    <select type = "text" name ="idPersonne" class = "form-control" id ="input1"> 
						<?php
							foreach ($lesPersonnes as $unePersonne ){
								echo "<option value ='".$unePersonne['idPersonne']."'>".$unePersonne['nom']."</option>";
							}
						?>			
					</select>
                </div>
            </div>


			<div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> Prix </label>
                <div class = "col-sm-10">
                    <select type = "text" name ="idLunette" class = "form-control" id ="input1"> 
						<?php
							foreach ($lesLunettes as $uneLunette ){
								echo "<option value ='".$uneLunette['idLunette']."'>".$uneLunette['prix']."</option>";
							}
						?>			
					</select>
                </div>
            </div>

           

            <input type="submit" <?php if($laReservation!=null) echo ' name="Modifier" value="Modifier"';
                else echo ' name="Valider" value="Valider"'; ?>
            >

            <input type = "reset" name = "Annuler" value = "Annuler">

        </form>

       

    </div>


</div>

