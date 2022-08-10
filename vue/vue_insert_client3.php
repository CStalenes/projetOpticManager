<h2> Insertion des Clients </h2>


<div class = "container">
    <div class = "row pt-4">
        <form action="" method = "POST" class = "form-horizontal col-md-6 pt-4">
            <h2> Crud tab </h2>
            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> Nom </label>
                <div class = "col-sm-10">
                    <input type = "text"  name ="nom" class = "form-control" id ="input1" value =" <?php if($leClient!= null) echo $leClient['nom'];?>">
                </div>
            </div>

            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> Prenom </label>
                <div class = "col-sm-10">
                    <input type = "text"  name ="prenom" class = "form-control" id ="input1" value =" <?php if($leClient!= null) echo $leClient['prenom'];?>">
                </div>
            </div>

            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> Adresse </label>
                <div class = "col-sm-10">
                    <input type = "text"  name ="adresse" class = "form-control" id ="input1" value =" <?php if($leClient!= null) echo $leClient['adresse'];?>">
                </div>
            </div>

            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> Email </label>
                <div class = "col-sm-10">
                    <input type = "text" name ="email" class = "form-control" id ="input1" value =" <?php if($leClient!= null) echo $leClient['email'];?>">
                </div>
            </div>

            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> Age </label>
                <div class = "col-sm-10">
                    <input type = "text" name ="age" class = "form-control" id ="input1" value =" <?php if($leClient!= null) echo $leClient['age'];?>">
                </div>
            </div>

            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> Telephone </label>
                <div class = "col-sm-10">
                    <input type = "text"  name ="telephone" class = "form-control" id ="input1" value =" <?php if($leClient!= null) echo $leClient['telephone'];?>">
                </div>
            </div>

            <input type="submit" <?php if($leClient!=null) echo ' name="Modifier" value="Modifier"';
                else echo ' name="Valider" value="Valider"'; ?>
            >

            <input type = "reset" name = "Annuler" value = "Annuler">

        </form>

       

    </div>


</div>