<?php 
$serveur = "localhost";     
$utilisateur = "root"; 
$motDePasse = "";
$nomDeLaBase = "monsite"; 
$connexion = new mysqli($serveur,$utilisateur,$motDePasse,$nomDeLaBase); 
$passworda=$_POST["passworda"];
$usernamea=$_POST["usernamea"];
$ida=0;

$nomadmin="";
$requete="select ida,usernamea,passworda from admin where usernamea='$usernamea' and passworda='$passworda'";//houni récuperit l id client 
$result=$connexion->query($requete);
if(mysqli_num_rows($result)>0) //ken email w passewod mawjoudin boucle while pour récuperation d'id
{
    while ($ligne = $result->fetch_assoc()){
        $ida=$ligne["ida"];
        $nomadmin=$ligne["usernamea"];
      
     }
    setcookie('admin_id',$ida); //stockage de l'idc dans cookie bch tala3li chkoun l client connecté ==> console , application , cookies
    setcookie('nomadmin',$nomadmin); 
   
    ?>
<script>
window.location.href="loginadmin.php"
</script>
<?php
}

  else{
?>
<script>

window.location.href="interfaceloginadmin.php"
alert("verifier")
</script>
<?php
  }
?>
