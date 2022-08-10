<h2> Insertion d'une paire de Verre </h2>

<div class = "container">
    <div class = "row pt-4">
        <form action="" method = "POST" class = "form-horizontal col-md-6 pt-4">
            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> vision </label>
                <div class = "col-sm-10">
                    <input type = "text"  name ="vision" class = "form-control" id ="input1" value =" <?php if($leVerre!= null) echo $leVerre['vision'];?>">
                </div>
            </div>


            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> couleur </label>
                <div class = "col-sm-10">
                    <input type = "text"  name ="couleur" class = "form-control" id ="input1" value =" <?php if($leVerre!= null) echo $leVerre['couleur'];?>">
                </div>
            </div>

            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> matiere </label>
                <div class = "col-sm-10">
                    <input type = "text" name ="matiere" class = "form-control" id ="input1" value =" <?php if($leVerre!= null) echo $leVerre['matiere'];?>">
                </div>
            </div>

            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> laboratoire </label>
                <div class = "col-sm-10">
                    <input type = "text" name ="laboratoire" class = "form-control" id ="input1" value =" <?php if($leVerre!= null) echo $leVerre['laboratoire'];?>">
                </div>
            </div>

           

            <input type="submit" <?php if($leVerre!=null) echo ' name="Modifier" value="Modifier"';
                else echo ' name="Valider" value="Valider"'; ?>
            >

            <input type = "reset" name = "Annuler" value = "Annuler">

        </form>

       

    </div>


</div>






