<link rel="stylesheet" href="styles.css" type="text/css" />


<form id="commander" action="index.php?page=verifiercommande" method="POST">
    <h2>Commander</h2>

    <label for="select">Sélection :</label>
    <select id="select" name="select" required>
        <option value="" disabled selected>Choisissez une option</option>
        <?php foreach($velos as $velo){ ?>
            <option value="<?=$velo['id_produit']?>">Vélo <?=$velo['id_produit']?></option>
        <?php } ?>
    </select>

    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Message :</label>
    <textarea id="message" name="message" required></textarea>

    <button type="submit">Envoyer</button>
</form>