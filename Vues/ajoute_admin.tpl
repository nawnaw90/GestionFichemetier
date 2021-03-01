<form class="form-group-add" name="Admin" action="ajouter-admin.php" enctype="multipart/form-data" method="POST">

    <h2 class="text-center">Ajouter un admin</h2>     

            <div class="form-group">
            <p>Nom de l'administrateur</p>
                    <input type="text" name="nom" class="form-control" placeholder="Nom" required="required" autocomplete="off">
             </div>
            <div class="form-group">
            <p>Email de l'administrateur</p>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
            </div>
            <div class="form-group">
            <p>Mot de passe de l'administrateur</p>
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                    <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
            </div>
                <label><p>Quelle rôle souhaitez-vous lui attribuer ?</label>
            <select name="role" required>
             <option value="super">Super-Admin</option>
             <option value="admin">Admin</option>
            </select> 
            </P>
            <button name="submit" type="submit">Ajouter</button>
            <input name="ajouter-admin" type="hidden" value="ajouter-admin">

        </form>