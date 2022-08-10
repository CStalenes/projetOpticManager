<h2> Insertion d'une paire de lunette </h2>


<div class = "container">
    <div class = "row pt-4">
        <form action="" method = "POST" class = "form-horizontal col-md-6 pt-4">
            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> libelle </label>
                <div class = "col-sm-10">
                    <input type = "text"  name ="libelle" class = "form-control" id ="input1" value =" <?php if($laLunette!= null) echo $laLunette['libelle'];?>">
                </div>
            </div>

            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> couleur </label>
                <div class = "col-sm-10">
                    <input type = "text"  name ="couleur" class = "form-control" id ="input1" value =" <?php if($laLunette!= null) echo $laLunette['couleur'];?>">
                </div>
            </div>

            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> genre </label>
                <div class = "col-sm-10">
                    <input type = "text" name ="genre" class = "form-control" id ="input1" value =" <?php if($laLunette!= null) echo $laLunette['genre'];?>">
                </div>
            </div>

            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> marque </label>
                <div class = "col-sm-10">
                    <input type = "text" name ="marque" class = "form-control" id ="input1" value =" <?php if($laLunette!= null) echo $laLunette['marque'];?>">
                </div>
            </div>

			<div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> 'prix </label>
                <div class = "col-sm-10">
                    <input type = "text" name ="'prix" class = "form-control" id ="input1" value =" <?php if($laLunette!= null) echo $laLunette['prix'];?>">
                </div>
            </div>


			<div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> quantite </label>
                <div class = "col-sm-10">
                    <input type = "text" name ="quantite " class = "form-control" id ="input1" value =" <?php if($laLunette!= null) echo $laLunette['quantite '];?>">
                </div>
            </div>

			<div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> disponibilite </label>
                <div class = "col-sm-10">
                    <input type = "text" name ="disponibilite" class = "form-control" id ="input1" value =" <?php if($laLunette!= null) echo $laLunette['disponibilite'];?>">
                </div>
            </div>

			<div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> Type de verre </label>
                <div class = "col-sm-10">
                    <select type = "text" name ="idVerre" class = "form-control" id ="input1"> 
						<?php
							foreach ($lesVerres as $unVerre ){
								echo "<option value ='".$unVerre['idVerre']."'>".$unVerre['vision']."</option>";
							}
						?>			
					</select>
                </div>
            </div>


			<div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> Type de matiere </label>
                <div class = "col-sm-10">
                    <select type = "text" name ="idMonture" class = "form-control" id ="input1"> 
						<?php
							foreach ($lesMontures as $uneMonture ){
								echo "<option value ='".$uneMonture['idMonture']."'>".$uneMonture['matiere']."</option>";
							}
						?>			
					</select>
                </div>
            </div>

           

            <input type="submit" <?php if($laLunette!=null) echo ' name="Modifier" value="Modifier"';
                else echo ' name="Valider" value="Valider"'; ?>
            >

            <input type = "reset" name = "Annuler" value = "Annuler">

        </form>

       

    </div>


</div>


