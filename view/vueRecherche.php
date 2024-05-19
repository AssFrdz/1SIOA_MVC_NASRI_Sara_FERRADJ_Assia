<form action="index.php?action=recherche" method="POST">
    <label for="nom">Nom</label><br>
    <input type="text" name="nom" id=""><br>
    <label for="prenom">Prenom</label><br>
    <input type="text" name="prenom" id=""><br>
    <label for="tel">Téléphone</label><br>
    <input type="number" name="tel" id=""><br>
    <label for="email">Email</label><br>
    <input type="text" name="email" id=""><br>
    <label for="remarque">Remarque</label><br>
    <input type="text" name="remarque" id=""><br>
    <input type="submit" value="Rechercher"><br>
    <a href="index.php?action=accueil">Annuler</a>
</form>
<table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Remarque</th>
        </tr>
        <?php if(!empty($_POST)){foreach($_SESSION["resultatsRecherche"] as $contact):?>
            <tr>
                <td><?=$contact["nom"]?></td>
                <td><?=$contact["prenom"]?></td>
                <td><?=$contact["email"]?></td>
                <td><?=$contact["tel"]?></td>
                <td><?=$contact["remarque"]?></td>
            </tr>
            
    
        <?php endforeach;}?>
    </table>
