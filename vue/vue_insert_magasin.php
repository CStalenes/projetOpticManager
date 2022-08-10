<h2> Insertion d'un Magasin </h2>


<div class = "container">
    <div class = "row pt-4">
        <form action="" method = "POST" class = "form-horizontal col-md-6 pt-4">
            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> Nom </label>
                <div class = "col-sm-10">
                    <input type = "text"  name ="nom" class = "form-control" id ="input1" value =" <?php if($leMagasin!= null) echo $leMagasin['nom'];?>">
                </div>
            </div>


            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> Adresse </label>
                <div class = "col-sm-10">
                    <input type = "text"  name ="adresse" class = "form-control" id ="input1" value =" <?php if($leMagasin!= null) echo $leMagasin['adresse'];?>">
                </div>
            </div>

            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> Email </label>
                <div class = "col-sm-10">
                    <input type = "text" name ="email" class = "form-control" id ="input1" value =" <?php if($leMagasin!= null) echo $leMagasin['email'];?>">
                </div>
            </div>

            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> Telephone </label>
                <div class = "col-sm-10">
                    <input type = "text" name ="telephone" class = "form-control" id ="input1" value =" <?php if($leMagasin!= null) echo $leMagasin['telephone'];?>">
                </div>
            </div>

           

            <input type="submit" <?php if($leMagasin!=null) echo ' name="Modifier" value="Modifier"';
                else echo ' name="Valider" value="Valider"'; ?>
            >

            <input type = "reset" name = "Annuler" value = "Annuler">

        </form>

       

    </div>


</div>






