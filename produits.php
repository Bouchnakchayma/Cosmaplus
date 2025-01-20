<?php 
$serveur = "localhost";           
$utilisateur = "root";  
$motDePasse = "";
$nomDeLaBase = "monsite";   
$connexion = new mysqli($serveur,$utilisateur,$motDePasse,$nomDeLaBase);  
?>
<style>
            body {
                margin: 0;
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
            }
    
            .admin-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 20px;
                background-color: #2c3e50;
                color: white;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    
    
              
            }
    
            .logo h1 {
                margin: 0;
                font-size: 24px;
            }
    
            nav ul {
                list-style: none;
                display: flex;
                margin: 0;
                padding: 0;
            }
    
            nav ul li {
                margin-left: 20px;
            }
    
            nav ul li a {
                color: white;
                text-decoration: none;
                font-size: 16px;
            }
    
            nav ul li a:hover {
                text-decoration: underline;
            }
    
            .profile {
                display: flex;
                align-items: center;
            }
    
            .profile img {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                margin-right: 10px;
            }
            .button{
    background-color: rgb(25, 193, 25);
    font-size:15px;
    border-radius: 10px;
            }
        </style>

<body>
        <header class="admin-header">
            <div class="logo">
                <h1>Cosmaplus</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="http://localhost/Mon%20Site/loginadmin.php">Utilisateurs</a></li>
                    <li><a href="http://localhost/Mon%20Site/produits.php">Produits</a></li>
                    <li><a href="http://localhost/Mon%20site/commandeadmin.php">commandes</a></li>
                  
                    <li><button type="submit" class="button" onclick="window.location.href='localhost/Mon%20site/addproducts.html';">+Ajouter produits</button></li>
                  
                </ul>
            </nav>
        </header>
    
    </body>
    <style>
    table{
        border-bottom: 20%;
    }
    table,td,th,tr{
        border:1px solid black;
       margin-top:5%;
       margin-left:3%;

    }

td, th {
padding: 8px; /* Ajoute de l'espace autour du texte dans les cellules */
text-align: left; /* Aligne le texte à gauche */
}


  
   th{
    background-color: #7895b3;
    }
    </style>
<table >
    <tr >
        <th >idp</th>
        <th>nom Produits</th>
        <th>description</th>
        <th>catégorie</th>
        <th>prix </th>
        <th>images </th>
        <th>modif/sup</th>
        <th>typepr</th>
    </tr>  
<?php
$requete= "SELECT * from produits";  
$resultat=$connexion->query($requete) ; 
    // Parcourir les résultats et afficher les données 
    while ($ligne = $resultat->fetch_assoc()) { ?>
<tr>  
    <td>  <?php  echo  $ligne["idp"] ; ?></td>
    <td>  <?php  echo  $ligne["nompr"] ; ?></td> 
    <td>  <?php  echo  $ligne["descriptionpr"] ; ?></td> 
    <td>  <?php  echo  $ligne["catégoriepr"] ; ?></td>  
    <td>  <?php  echo  $ligne["prixpr"] ; ?></td>   
    <td> <img src="<?php  echo  $ligne["image"] ; ?>" width="120px"> </td>   
    <td><a href="supprimer.php?idp=<?php  echo  $ligne["idp"] ; ?> ">
             <button> supprimer</button> </a> 
             <a href="modifier.php?idp=<?php  echo  $ligne["idp"] ; ?>"  >
                <button > modifier</button> </a></td>
                <td>  <?php  echo  $ligne["typepr"] ; ?></td> 
</tr> 
    <?php
}
$connexion->close();
?> 

