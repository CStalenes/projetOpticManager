<br>

<h2> Insertion d'une Monture </h2>



<div class = "container">
    <div class = "row pt-4">
        <form action="" method = "POST" class = "form-horizontal col-md-6 pt-4">
            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> Forme Monture </label>
                <div class = "col-sm-10">
                    <input type = "text"  name ="forme" class = "form-control" id ="input1" value =" <?php if($laMonture!= null) echo $laMonture['forme'];?>">
                </div>
            </div>


            <div class = "form-group">
                <label for="input1" class = "col-sm-2 control-label"> Matiere Monture </label>
                <div class = "col-sm-10">
                    <input type = "text"  name ="matiere" class = "form-control" id ="input1" value =" <?php if($laMonture!= null) echo $laMonture['matiere'];?>">
                </div>
            </div>

           

            <input type="submit" <?php if($laMonture!=null) echo ' name="Modifier" value="Modifier"';
                else echo ' name="Valider" value="Valider"'; ?>
            >

            <input type = "reset" name = "Annuler" value = "Annuler">

        </form>

       

    </div>


</div>




