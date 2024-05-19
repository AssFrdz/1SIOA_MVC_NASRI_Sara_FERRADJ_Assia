<form action="index.php?action=modifications" method="POST">
<h1>Modifier contact</h1>
    <label for="id">Id</label><br>
    <input type="number" name="id" id="" value="<?=$cont["id"]?>"><br>
    <label for="nom">Nom</label><br>
    <input type="text" name="nom" id="" value="<?=$cont["nom"]?>"><br>
    <label for="prenom">Prenom</label><br>
    <input type="text" name="prenom" id="" value="<?=$cont["prenom"]?>"><br>
    <label for="tel">Téléphone</label><br>
    <input type="number" name="tel" id="" value="<?=$cont["tel"]?>"><br>
    <label for="email">Email</label><br>
    <input type="text" name="email" id="" value="<?=$cont["email"]?>"><br>
    <label for="remarque">Remarque</label><br>
    <input type="text" name="remarque" id="" value="<?=$cont["remarque"]?>"><br>
    <input type="submit" name="modif" value="Modifier"><br>
    <input type="submit" name="suppr" value="Supprimer"><br>
    <a href="index.php?action=accueil">Annuler</a>

</form>

