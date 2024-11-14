<style>
    body {
    font-family: Arial, sans-serif;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 0;
    padding: 20px;
}

nav {
    margin-bottom: 20px;
}

a {
    color: #4CAF50;
    text-decoration: none;
    font-weight: bold;
}

a:hover {
    text-decoration: underline;
}

form {
    max-width: 400px;
    width: 100%;
    padding: 20px;
    border: 1px solid greenyellow;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-top: 10px;
    font-weight: bold;
}

input, textarea, select {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid greenyellow;
    border-radius: 4px;
    box-sizing: border-box;
}

textarea {
    resize: vertical;
    height: 100px;
}

button {
    margin-top: 15px;
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #45a049;
}
</style>

<form id="contact" action="index.php?page=verifiercontact" method="POST">
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
