<form class="form-group-add" name="Admin" action="modifier-admin.php?admin=<!-- mail -->" enctype="multipart/form-data" method="POST">
    <h2 class="text-center">Modifier un admin</h2>     

            <div class="form-group">
            <p>Nom de l'administrateur</p>
                    <input type="text" name="nom" class="form-control" placeholder="Nom" value="<!-- Nom -->" required="required" autocomplete="off" >
             </div>
            <div class="form-group">
            <p>Email de l'administrateur</p>
                    <input type="email" name="email" class="form-control" placeholder="Email"  value="<!-- mail -->"required="required" autocomplete="off">
            </div>
            <div class="form-group">

                <label><p>Quelle rôle souhaitez-vous lui attribuer ?</label>
            <select name="role" value="<!-- Role -->" required>
             <option value="super">Super-Admin</option>
             <option value="admin">Admin</option>
            </select> 
            </P>
            <button name="submit" type="submit">Modifier</button>
            <input name="ajouter-admin" type="hidden" value="ajouter-admin">

        </form>