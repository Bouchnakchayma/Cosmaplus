<?php 
$serveur = "localhost";     
// Nom du serveur (généralement "localhost") 
$utilisateur = "root"; // Nom d'utilisateur de la base de données 
$motDePasse = ""; // Mot de passe de la base de données 
$nomDeLaBase = "monsite"; // Nom de la base de données 
// Établir la connexion à la base de données 
$connexion = new mysqli($serveur,$utilisateur,$motDePasse,$nomDeLaBase); 


$idp=$_GET["idp"]; //get id de l'url
$result="SELECT * from produits where idp=$idp";
$results=$connexion->query($result) ; 

    // Parcourir les résultats et afficher les données 
    while ($ligne = $results->fetch_assoc()) { 
        $cat=$ligne["catégoriepr"];
$type=$ligne["typepr"];
      ?>
<form action="modif2.php?idp=<?php echo$idp;?>" method="post" enctype="multipart/form-data">
 <input type="text" name="nompr" value=<?php echo $ligne["nompr"];?>><br>
 <input type="text" name="descriptionpr" value=<?php echo $ligne["descriptionpr"];?>><br>
 
 
 <select name="catégoriepr" id="" >
                    <option value="">selectionner catégorie</option>
                    <option value="Maquillage"<?php if($cat=="Maquillage") echo 'selected'?>>Maquillage</option>
                    <option value="soins visage" <?php if($cat=="soins visage") echo 'selected'?>>soins visage</option>
                    <option value="cheveux"<?php if($cat=="cheveux") echo 'selected'?>>cheveux</option>
                    <option value="ongles" <?php if($cat=="ongles") echo 'selected'?>>ongles</option>
                    <option value="Accessoire" <?php if($cat=="Accessoire") echo 'selected'?>>Accessoire</option>
    
                </select><br>  
 <input type="text" name="prixpr" value=<?php echo $ligne["prixpr"];?>><br>
 <input type="file" name="image" value=<?php echo $ligne["image"];?>><br>
 <select name="typepr" id="">
                    <option value="">selectionner type</option>
                    <option value="Non spécifique" <?php if($type=="Non spécifique") echo 'selected'?>>Non spécifique</option>
                    <option value="En promotion"<?php if($type=="En promotion") echo 'selected'?>>En promotion</option>
                    <option value="Meilleurs ventes" <?php if($type=="Meilleurs ventes") echo 'selected'?>>Meilleurs ventes</option>
                </select><br>
 <button type="submit">Envoyer</button> 
 
<?php
}
$connexion->close(); 
?>
   