<!DOCTYPE html>
<html lang="fr">
<?php
$serveur = "localhost";     
$utilisateur = "root"; 
$motDePasse = ""; 
$nomDeLaBase = "monsite";
$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $nomDeLaBase);
$somme=$_POST["somme"];
// Vérifier la connexion
if ($connexion->connect_error) {
    die("Connexion échouée: " . $connexion->connect_error);
}
// Insérer la commande dans la base de données
$requete = "INSERT INTO `commande`(`date_commande`, `etat`,prixtotale) VALUES('04/09/2024', 'en cours de livraison',$somme)";
$connexion->query($requete);
// Récupérer l'ID de la dernière commande insérée
$requete = "SELECT MAX(idcom) AS max_idcom FROM commande";
$resultat = $connexion->query($requete);
$idc=$_COOKIE['user_id'];
// Vérifier si la requête retourne un résultat
if ($resultat && $ligne = $resultat->fetch_assoc()) {
    $idcom = $ligne["max_idcom"];
    // Mettre à jour le panier avec l'ID de la commande


    $requete1 = "UPDATE panier SET id_commande = $idcom where id_client=$idc and id_commande=0 "; // houni badalt l id commande 
    $connexion->query($requete1);
} else {
    echo "Erreur : aucune commande trouvée.";
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de Commande</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .confirmation-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #4CAF50;
        }

        .order-details {
            margin: 20px 0;
            text-align: left;
        }

        .order-details h2 {
            margin-bottom: 10px;
        }

        .order-details ul {
            list-style: none;
            padding: 0;
        }

        .order-details li {
            margin-bottom: 10px;
        }

        .Retour {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .Retour:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="confirmation-container">
        <h1>Merci pour votre commande !</h1>
        <p>Votre commande a été validée avec succès.</p>
        <p>Nous vous enverrons un email de confirmation avec les détails de votre commande.</p>
        <div class="order-details">
            <h2>Détails de la commande</h2>
            <ul>
                <li>Numéro de commande : <strong><?php echo $idcom; ?></strong></li>
                <li>Date : <strong>04 septembre 2024</strong></li>
                <li>Total : <strong><?php echo $somme ?></strong></li>
            </ul>
        </div>
        <a href="index.php" class="Retour">Retour à l'accueil</a>
    </div>
</body>
</html>
