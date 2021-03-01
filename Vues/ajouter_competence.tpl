       

        <form class="form-group-add" name="Competence" action="ajouter-competence.php" enctype="multipart/form-data" method="POST">
            <h2 class="text-center">Ajouter une compétence</h2> 
            
            
              <input class="form-group" type="text" name="nomCompetence" placeholder="Nom de la compétence" /> 
            
            
    
            <button name="submit" type="submit">Ajouter</button>
            <input name="ajouter-competence" type="hidden" value="ajouter-competence">

        </form>


<form class="form-group-add" name="suprCompetence" action="ajouter-competence.php" enctype="multipart/form-data" method="POST">
            <h2 class="text-center">Suprimée des plusieurs compétences</h2> 
            
            <!-- COMPETENCES REPLACE --> 
            
            
    
            <button name="submit" type="submit">Supprimé</button>
            <input name="supr-competence" type="hidden" value="supr-competence">

        </form>

