<h2> Insertion des Techniciens </h2>

<div class = "container">
    <div class = "row pt-4">
        <form action="" method = "POST" class = "form-horizontal col-md-6 pt-4">
            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> Nom </label>
                <div class = "col-sm-10">
                    <input type = "text"  name ="nom" class = "form-control" id ="input1" value =" <?php if($leTechnicien!= null) echo $leTechnicien['nom'];?>">
                </div>
            </div>

            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> Prenom </label>
                <div class = "col-sm-10">
                    <input type = "text"  name ="prenom" class = "form-control" id ="input1" value =" <?php if($leTechnicien!= null) echo $leTechnicien['prenom'];?>">
                </div>
            </div>

            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> Adresse </label>
                <div class = "col-sm-10">
                    <input type = "text"  name ="adresse" class = "form-control" id ="input1" value =" <?php if($leTechnicien!= null) echo $leTechnicien['adresse'];?>">
                </div>
            </div>

            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> Email </label>
                <div class = "col-sm-10">
                    <input type = "text" name ="email" class = "form-control" id ="input1" value =" <?php if($leTechnicien!= null) echo $leTechnicien['email'];?>">
                </div>
            </div>

            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> Diplome </label>
                <div class = "col-sm-10">
                    <input type = "text" name ="diplome" class = "form-control" id ="input1" value =" <?php if($leTechnicien!= null) echo $leTechnicien['diplome'];?>">
                </div>
            </div>

           

            <input type="submit" <?php if($leTechnicien!=null) echo ' name="Modifier" value="Modifier"';
                else echo ' name="Valider" value="Valider"'; ?>
            >

            <input type = "reset" name = "Annuler" value = "Annuler">

        </form>

       

    </div>


</div>