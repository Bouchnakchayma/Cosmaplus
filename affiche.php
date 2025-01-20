<?php // page affichage
$serveur = "localhost";     
// Nom du serveur (généralement "localhost") 
$utilisateur = "root"; // Nom d'utilisateur de la base de données 
$motDePasse = ""; // Mot de passe de la base de données 
$nomDeLaBase = "monsite"; // Nom de la base de données 
// Établir la connexion à la base de données 
$connexion = new mysqli($serveur,$utilisateur,$motDePasse,$nomDeLaBase); 
// Vérifier la connexion 

$requete= "SELECT * from user"; //pour afficher la requete dans chrome si sans ce code pas d'affichage 
 $resultat=$connexion->query($requete) ; 
 if ($resultat) { 
    ?>
    <style>
        table,td,th,tr{
            border:1px solid black;
        }
        </style>
    <table >
        <tr >
            <th >idc</th>
            <th>nomc</th>
            <th>adressec</th>
            <th>emailc</th>
            <th>numtel</th>
            <th>usernamec</th>
            <th>passwordc</th>
        </tr>
    <?php
        // Parcourir les résultats et afficher les données 
        while ($ligne = $resultat->fetch_assoc()) { ?>
<tr>  
        <td>  <?php  echo  $ligne["idc"] ; ?></td>
        <td>  <?php  echo  $ligne["nomc"] ; ?></td> 
        <td>  <?php  echo  $ligne["adressec"] ; ?></td>  
        <td>  <?php  echo  $ligne["emailc"] ; ?></td>   
        <td>  <?php  echo  $ligne["numtel"] ; ?></td> 
        <td>  <?php  echo  $ligne["usernamec"] ; ?></td> 
        <td>  <?php  echo  $ligne["passwordc"] ; ?></td> 
        <!-- <td> <img src=" <?php  echo  $ligne["path"] ; ?>"></td> lien de l'image pour l'ajout -->
        <td><a href="supprimer.php?id=<?php  echo  $ligne["idc"] ; ?> ">
             <button> supprimer</button> </a> 
             <a href="modifier.php?id= <?php  echo  $ligne["idc"] ; ?>"  >
                <button > modifier</button> </a></td>
     
</tr> 
        <?php
    }} 
?>
<script>
    windo
</script>
    <?php
$connexion->close(); 
?>