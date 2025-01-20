<?php // page affichage
$serveur = "localhost";     
// Nom du serveur (généralement "localhost") 
$utilisateur = "root"; // Nom d'utilisateur de la base de données 
$motDePasse = ""; // Mot de passe de la base de données 
$nomDeLaBase = "monsite"; // Nom de la base de données 
// Établir la connexion à la base de données 
$connexion = new mysqli($serveur,$utilisateur,$motDePasse,$nomDeLaBase); 
// Vérifier la connexion 
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

        

        .button{
background-color: rgb(25, 193, 25);
font-size:15px;
border-radius: 10px;
        }
    </style>
</head>

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
             
                <li><button type="submit" class="button" onclick="window.location.href='http://localhost/Mon%20site/addproducts.html';">+ajouter produit</button></li>
            </ul>
        </nav>
    </header>
</body>


<?php

$requete= "SELECT * from user";  
 $resultat=$connexion->query($requete) ; 
 if ($resultat) { 
    ?>
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
            <th >idc</th>
            <th>nomc</th>
            <th>prenomc</th>
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
        <td>  <?php  echo  $ligne["prenomc"] ; ?></td> 
        <td>  <?php  echo  $ligne["adressec"] ; ?></td>  
        <td>  <?php  echo  $ligne["emailc"] ; ?></td>   
        <td>  <?php  echo  $ligne["numtel"] ; ?></td> 
        <td>  <?php  echo  $ligne["usernamec"] ; ?></td> 
        <td>  <?php  echo  $ligne["passwordc"] ; ?></td> 
        
     
</tr> 
        <?php
    }} 
?>
    <?php
$connexion->close(); 
?>