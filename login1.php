<?php 
$serveur = "localhost";     
$utilisateur = "root"; 
$motDePasse = "";
$nomDeLaBase = "monsite"; 
$connexion = new mysqli($serveur,$utilisateur,$motDePasse,$nomDeLaBase); 
$passwordc=$_POST["passwordc"];
$emailc=$_POST["emailc"];
$idc=0;
$nom="";
$prenom="";
$requete="select emailc,passwordc,idc,nomc,prenomc from user where emailc='$emailc' and passwordc='$passwordc'";//houni récuperit l id client 
$result=$connexion->query($requete);
if(mysqli_num_rows($result)>0) //ken email w passewod mawjoudin boucle while pour récuperation d'id
{
    while ($ligne = $result->fetch_assoc()){
        $idc=$ligne["idc"];
        $prenom=$ligne["prenomc"];
        $nom=$ligne['nomc'];
     }
    setcookie('user_id',$idc); //stockage de l'idc dans cookie bch tala3li chkoun l client connecté ==> console , application , cookies
    setcookie('nom',$nom); 
    setcookie('prenom',$prenom); 
    ?>
<script>
window.location.href="index.php"
</script>
<?php
}
else ?>
<script>

window.location.href="login1.html"
alert("verifier")
</script>
<?php
    $connexion->close();
?>