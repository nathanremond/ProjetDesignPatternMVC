<link rel="stylesheet" href="../css/style.css" type="text/css" />

<form id="contact" action="submit_form.php" method="POST">
    <h2>Contact</h2>


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
