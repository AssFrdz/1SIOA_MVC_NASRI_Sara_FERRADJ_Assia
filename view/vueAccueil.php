<form action="index.php?action=modifier" method="POST">
    <table>
        <tr>
            <th>Choix</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Remarque</th>
        </tr>
        
        <?php foreach($_SESSION["contacts"] as $contact):?>
            <tr> 
                <td><input type="radio" id="" name="contact" value="<?=$contact["id"]?>"> </td>
                <td><?=$contact["nom"]?></td>
                <td><?=$contact["prenom"]?></td>
                <td><?=$contact["email"]?></td>
                <td><?=$contact["tel"]?></td>
                <td><?=$contact["remarque"]?></td>
            </tr>
          
        <?php endforeach;?>
        
            <tr>
            <td><button type="submit">Modifier</button></td>
            <td><a href="index.php?action=ajouter">+</a></td>
            </tr>
        
    </table>


</form>