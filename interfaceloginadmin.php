<?php 
$serveur = "localhost";     
$utilisateur = "root"; 
$motDePasse = "";
$nomDeLaBase = "monsite"; 
$connexion = new mysqli($serveur,$utilisateur,$motDePasse,$nomDeLaBase); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="styles.css"> <!-- Assure-toi de lier correctement le CSS -->
    <style>
       
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f0f0f0; /* Gris très clair pour le fond */
    color: #444; /* Gris foncé pour le texte */
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Conteneur principal du formulaire */
.admin-login-container {
    background-color: #ffffff; /* Fond blanc pour le formulaire */
    border-radius: 10px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Ombre plus marquée pour un effet de profondeur */
    padding: 30px;
    max-width: 380px;
    width: 100%;
    margin: 20px;
    text-align: center;
}

/* Logo */
.logo-container {
    margin-bottom: 20px;
}

.logo {
    width: 100px; /* Ajuste la taille du logo */
    height: auto;
}

/* Message de bienvenue */
h1 {
    font-size: 28px;
    margin-bottom: 10px;
    color: #e91e63; /* Rose vif pour le titre */
}

.welcome-message {
    font-size: 18px;
    color: #555; /* Gris foncé pour le message */
    margin-bottom: 25px;
}

/* Formulaire */
.form-group {
    margin-bottom: 20px;
    text-align: left;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-size: 16px;
    color: #333;
}

.form-group input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 16px;
    box-sizing: border-box;
}

.submit-button {
    background-color: #e91e63; /* Rose vif pour le bouton */
    color: white;
    border: none;
    padding: 12px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    margin-top: 10px;
    cursor: pointer;
    border-radius: 6px;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.submit-button:hover {
    background-color: #c2185b; /* Rose plus foncé au survol */
    transform: translateY(-2px); /* Effet léger de surélévation */
}

    </style>
</head>
<body>




    <div class="admin-login-container">
        <div class="logo-container">
            <img src="image/logo1-removebg-preview.png" alt="Logo" class="logo"> <!-- Ton logo -->
        </div>
        <h1>Bienvenue, Administrateur !</h1>
        <p class="welcome-message">Connectez-vous pour accéder à votre tableau de bord.</p>
        <form action="admin-login.php" method="post">
            <div class="form-group">
                <label for="admin-username">Nom d'utilisateur</label>
                <input type="text" id="admin-username" name="usernamea" required>
            </div>
            <div class="form-group">
                <label for="admin-password">Mot de passe</label>
                <input type="password" id="admin-password" name="passworda" required>
            </div>
            <button type="submit" class="submit-button">Se connecter</button>
        </form>
    </div>
</body>
</html>
