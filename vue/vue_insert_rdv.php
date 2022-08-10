<h2> Insertion d'un RDV </h2>



<div class = "container">
    <div class = "row pt-4">
        <form action="" method = "POST" class = "form-horizontal col-md-6 pt-4">
            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> motif </label>
                <div class = "col-sm-10">
                    <input type = "text"  name ="motif" class = "form-control" id ="input1" value =" <?php if($leRDV!= null) echo $leRDV['motif'];?>">
                </div>
            </div>

            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> dateRDV </label>
                <div class = "col-sm-10">
                    <input type = "text"  name ="dateRDV" class = "form-control" id ="input1" value =" <?php if($leRDV!= null) echo $leRDV['dateRDV'];?>">
                </div>
            </div>

            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> heurefin </label>
                <div class = "col-sm-10">
                    <input type = "text" name ="heurefin" class = "form-control" id ="input1" value =" <?php if($leRDV!= null) echo $leRDV['heuredebut'];?>">
                </div>
            </div>

            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> heurefin </label>
                <div class = "col-sm-10">
                    <input type = "text" name ="heurefin" class = "form-control" id ="input1" value =" <?php if($leRDV!= null) echo $leRDV['heurefin'];?>">
                </div>
            </div>

			<div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> 'prix </label>
                <div class = "col-sm-10">
                    <input type = "text" name ="'prix" class = "form-control" id ="input1" value =" <?php if($leRDV!= null) echo $leRDV['prix'];?>">
                </div>
            </div>


			<div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> quantite </label>
                <div class = "col-sm-10">
                    <input type = "text" name ="quantite " class = "form-control" id ="input1" value =" <?php if($leRDV!= null) echo $leRDV['quantite '];?>">
                </div>
            </div>

			<div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> disponibilite </label>
                <div class = "col-sm-10">
                    <input type = "text" name ="disponibilite" class = "form-control" id ="input1" value =" <?php if($leRDV!= null) echo $leRDV['disponibilite'];?>">
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
                <label for="input1" class = "col-sm-2 control-label"> Nom Magasin </label>
                <div class = "col-sm-10">
                    <select type = "text" name ="idMagasin" class = "form-control" id ="input1"> 
						<?php
							foreach ($lesMagasins as $unMagasin ){
								echo "<option value ='".$unMagasin['idMagasin']."'>".$unMagasin['nom']."</option>";
							}
						?>			
					</select>
                </div>
            </div>

           

            <input type="submit" <?php if($leRDV!=null) echo ' name="Modifier" value="Modifier"';
                else echo ' name="Valider" value="Valider"'; ?>
            >

            <input type = "reset" name = "Annuler" value = "Annuler">

        </form>

       

    </div>


</div>



