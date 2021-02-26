
  <form class="form-group-add" name="ModifierFicheMetier" action="modifier-fiche.php" method="POST">
            <h2 class="text-center">Modifier une fiche métier</h2> 
            
            
              <input class="form-group" type="text" name="nom" placeholder="nom" /> 
          
           
            <input class="form-group" type="text" name="mail"  placeholder="mail"  autocomplete="off">

            <input class="form-group" type="text" name="password"  placeholder="password"  autocomplete="off">
          
                
          
           
            
               

            
            <button name="submit" type="submit">Ajouter</button>
            <input  name="modifier-fiche" type="hidden" value="modifier-fiche">
        </form>


 <input type="text" name="Jeux_Id" value="<?php echo $jeux->Jeux_Id; ?>">