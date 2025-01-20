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
}else 
echo("bien connecte"); 

$nomc=$_POST["nomc"];
$prenomc=$_POST["prenomc"];
$adressec=$_POST["adressec"];
$emailc=$_POST["emailc"];
$numtel=$_POST["numtel"];
$usernamec=$_POST["usernamec"];
$passwordc=$_POST["passwordc"];
$passwordc1=$_POST["passwordc1"];
$requete = "INSERT INTO user (nomc, prenomc,numtel,emailc,adressec,usernamec,passwordc)  
                    VALUES('$nomc','$prenomc','$numtel','$emailc','$adressec','$usernamec','$passwordc')"; 

$connexion->query($requete);


if($passwordc!=$passwordc1) {
    ?>
      <script>
          alert("non confirme")
   window.location.href="login.html"
  </script>
  <?php
  }
// N'oubliez pas de fermer la connexion à la base de données lorsque vous avez terminé 
?>
<script>
    window.location.href="login1.html"
</script>
<?php
$connexion->close(); 
?>