<?php 
$serveur = "localhost";     
// Nom du serveur (généralement "localhost") 
$utilisateur = "root"; // Nom d'utilisateur de la base de données 
$motDePasse = ""; // Mot de passe de la base de données 
$nomDeLaBase = "monsite"; // Nom de la base de données 
// Établir la connexion à la base de données 
$connexion = new mysqli($serveur,$utilisateur,$motDePasse,$nomDeLaBase); 
// Vérifier la connexion 
if ($connexion->connect_error) { 
die("La connexion à la base de données a échoué : ".$connexion->connect_error); 
}

$idp=$_GET["idp"]; //get id de l'url
$requete = "DELETE FROM produits WHERE idp=$idp"; //pour afficher la requete dans chrome si sans ce code pas d'affichage 
$resultat=$connexion->query($requete); 
if ($connexion->query($requete) === TRUE) {
    echo "Produit supprimé avec succès";
} else {
    echo "Erreur lors de la suppression du produit : " . $connexion->error;
}

 ?>
 <script>

    window.location.href="produits.php"// pour revenir à la page affiche aprés la suppression
    alert("bien supprimer")
 </script>