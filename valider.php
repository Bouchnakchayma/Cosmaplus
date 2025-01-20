<?php 
$serveur = "localhost";     
$utilisateur = "root"; 
$motDePasse = "";
$nomDeLaBase = "monsite"; 
$connexion = new mysqli($serveur,$utilisateur,$motDePasse,$nomDeLaBase); 
$idcom=$_GET["idcom"];
$requete1 = "UPDATE commande SET etat ='confirmé' where idcom=$idcom"; // houni badalt l id commande 
$connexion->query($requete1);
?>
<script>
    window.location.href="loginadmin.php"
</script>