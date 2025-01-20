<!DOCTYPE html>
<html lang="en">
<?php
$serveur = "localhost";     
$utilisateur = "root"; 
$motDePasse = ""; 
$nomDeLaBase = "monsite";
$connexion = new mysqli($serveur,$utilisateur,$motDePasse,$nomDeLaBase); 
 
?> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Mon Site/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Ma Commande </title>
    <style>
        
     header .parag {
    text-align: center;
    background-color: palevioletred;
    letter-spacing: 3px;
    position: absolute;
    width: 100%;
margin-top: 0%;
}
  h2 {
            text-align: center;
            color: #333;
        }
        
main {
    padding: 2rem;
}

.commande-table {
    max-width: 1000px;
    margin: 0 auto;
    background: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.commande-table table {
    width: 100%;
    border-collapse: collapse;
}

.commande-table th, .commande-table td {
    padding: 1rem;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.commande-table th {
    background-color: #333;
    color: #fff;
}

.commande-table tr:hover {
    background-color: #f1f1f1;
}



    </style>
</head>

<body>
    <header>
        <p class="parag">Livraison offerte dès 50dt d'achats l Paiement en 3x sans frais dès 100dt d'achats</p>
        <img src="image/logo1-removebg-preview.png" alt="not found">

        <nav>
            <ul>
                <li class="menu"><a href="index.php">Home</a></li>

                <li class="menu">
                    <a href="maquillage.php">Maquillages</a>

                    <ul class="submenu">

                        <li class="sousmenu"><a href="#">Fond de teint</a></li>
                        <li class="sousmenu"><a href="#">Rouge à lèvres</a></li>
                        <li class="sousmenu"><a href="#">Highliter</a></li>
                        <li class="sousmenu"><a href="#">Palette</a></li>
                        <li class="sousmenu"><a href="#">Crayons</a></li>
                        <li class="sousmenu"><a href="#"> Blush</a></li>
                        <li class="sousmenu"><a href="#">Fixateur </a></li>
                    </ul>
                </li>
                <li class="menu">

                    <a href="soinsvisage.php">Soins Visage</a>
                    <div class="list1"></div>
                    <ul class="submenu">
                        <li class="sousmenu"><a href="#">crème hydratante</a></li>
                        <li class="sousmenu"><a href="#">Crème matifiante</a></li>
                        <li class="sousmenu"><a href="#"> Crème anti-rides</a></li>
                        <li class="sousmenu"><a href="#">Crème anti-taches </a></li>
                        <li class="sousmenu"><a href="#">Gommage</a></li>
                        <li class="sousmenu"><a href="#">Eau micellaire</a></li>
                        <li class="sousmenu"><a href="#">Gel nettoyant</a></li>
                        <li class="sousmenu"><a href="#">Sérum</a></li>
                        <li class="sousmenu"><a href="#">Masque visage</a></li>
                    </ul>
                    </div>


                </li>
                <li class="menu"><a href="cheveux.php">Cheveux</a>
                    <ul class="submenu">

                        <li class="sousmenu"><a href="#">Champoins</a></li>
                        <li class="sousmenu"><a href="#">Masque</a></li>
                        <li class="sousmenu"><a href="#"> Accessoires</a></li>
                        <li class="sousmenu"><a href="#">Soins </a></li>
                        <li class="sousmenu"><a href="#">Sérum</a></li>

                    </ul>
                </li>

                <li class="menu"><a href="ongles.php">Ongles</a>
                    <ul class="submenu">

                        <li class="sousmenu"><a href="#">Vernis à ongles</a></li>
                        <li class="sousmenu"><a href="#">Base et top</a></li>
                        <li class="sousmenu"><a href="#"> Accessoires</a></li>


                    </ul>
                </li>
                <li class="menu"><a href="Accessoire.php">Accessoires</a>
                    <ul class="submenu">

                        <li class="sousmenu"><a href="#">Pinceaux et Eponges</a></li>
                        <li class="sousmenu"><a href="#">Accessoires Corps</a></li>
                        <li class="sousmenu"><a href="#"> Accessoires hyggiène Bucco-Dentaire</a></li>


                    </ul>
                </li>
                <li class="menu"><a href="#">Promo</a>

                </li>
            </ul>
        </nav>
        <?php
        
        $idc=$_COOKIE['user_id'];
 
 $nom=$_COOKIE['nom'];// houni jbedet l idc w nom w prenom mel cookies 
 $prenom=$_COOKIE['prenom'];
        if($idc!=0){
            ?>
        <input type="search" placeholder="Rechercher">
        <i class="fa-solid fa-magnifying-glass"></i>

        <div class="user1">
          <a href="" id="username">Welcome <?php echo $nom; ?> </a> <br> <br>
            <a href="logout.php" id="logout"> logout</a>
        </div>
      
    <?php
}
else{
?>
 <div class="user">
          <a href="login.html"><i class="fa-solid fa-user"></i>  </a> 
        </div>
<?php

}
        
        ?>
        <a href="ajouterpanier.php" class="panier">
            <i class="fa-solid fa-basket-shopping"></i></a>
        <div class="panier">
            <i class="fa-solid fa-basket-shopping"></i>
        </div>
               <div class="panier2">
            <a href="historiquepanier.php"> <i class="fa-solid fa-cart-shopping"></i> </a>
               </div>

    </header>
    <h2>Historique commandes</h2>
    <main>
        <section class="commande-table">
            <table>
                <thead>
                    <tr>
                        <th>Nom Produit</th>
                        <th>Date</th>
                        <th>Quantité</th>
                        <th>Prix Total</th>
                        <th>Etat commande</th>
                       
                    </tr>
                </thead>
                <tbody>
             <?php 
$requete="SELECT * from panier inner join commande inner join produits where panier.id_commande=commande.idcom and panier.id_produit=produits.idp and id_client=$idc "; 
$resultat=$connexion->query($requete);
                while ($ligne = $resultat->fetch_assoc()) { ?>
<tr>  

        <td>  


<?php  echo  $ligne["nompr"] ; ?></td> 
          <td><?php

date_default_timezone_set("Africa/Tunis");
date("h:i:sa");
?></td>
        <td>  <?php  echo  $ligne["quantité"] ; ?></td> 
        <td>  <?php  echo  $ligne["prixtotale"] ; ?></td>  
        
        <td>  <?php  echo  $ligne["etat"] ; ?></td>  
        
        <?php
                }
                ?>
</tr> 
                   
                </tbody>
            </table>
        </section>
    </main>