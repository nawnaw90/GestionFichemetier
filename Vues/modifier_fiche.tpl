       
       

        <form class="form-group-add" name="ModifierFicheMetier" action="modifier-fiche.php?fiche=<!-- CODE ROM -->" method="POST">
            <h2 class="text-center">Modifier une fiche métier</h2> 
            
            
              <input class="form-group" type="text" name="code_ROM" placeholder="Code ROM" value="<!-- CODE ROM -->" /> 
          
           
            <input class="form-group" type="text" name="titre"  placeholder="Titre de la Fiche"  value="<!-- TITRE -->" autocomplete="off">
          
                
                <textarea  class="form-group"rows="10" cols="32" type="text" name="description courte"  placeholder="Description courte du Métier"><!-- DESC COURTE --></textarea>
           
         
            <textarea class="form-group" rows="20" cols="50" name="description longue" placeholder="Description longue du Métier"><!-- DESC LONGUE --></textarea>
            
               
               <div> <p>Ajouter une image : <input type="file" name="image" id="image" accept="image/*" /></p> </div>

              <!-- <div> <input class="form-group" type="text" name="competence 1"  placeholder="Compétence 1"  autocomplete="off"> 
                   <input class="form-group" type="text" name="competence 2"  placeholder="Compétence 2"  autocomplete="off">
                   <input class="form-group" type="text" name="competence 3"  placeholder="Compétence 3"  autocomplete="off">
                   <input class="form-group" type="text" name="competence 4"  placeholder="Compétence 4"  autocomplete="off">
                   <input class="form-group" type="text" name="competence 5"  placeholder="Compétence 5"  autocomplete="off">
                   <input class="form-group" type="text" name="competence 6"  placeholder="Compétence 6"  autocomplete="off">
                   <input class="form-group" type="text" name="competence 7"  placeholder="Compétence 7"  autocomplete="off">
                   <input class="form-group" type="text" name="competence 8"  placeholder="Compétence 8"  autocomplete="off">
                   <input class="form-group" type="text" name="competence 9"  placeholder="Compétence 9"  autocomplete="off">
                   <input class="form-group" type="text" name="competence 10"  placeholder="Compétence 10"  autocomplete="off">
               </div> -->
            
            <button name="modifier-fiche-submit" type="submit">Modifier</button>
            <input  name="hidden-code-rom" type="hidden" value="<!-- CODE ROM -->">
            <input  name="modifier-fiche" type="hidden" value="<!-- CODE ROM -->">
        </form>
