<?php
$serveur = "localhost";     
$utilisateur = "root"; 
$motDePasse = ""; 
$nomDeLaBase = "monsite";
$connexion = new mysqli($serveur,$utilisateur,$motDePasse,$nomDeLaBase); 
$idc=0;
$nom=" ";
$prenom=" ";
setcookie('user_id',$idc); 
setcookie('nom',$nom); 
setcookie('prenom',$prenom); 
?>
<script>
    window.location.href="index.php"
    </script>