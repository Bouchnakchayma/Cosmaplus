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
    <title>Panier </title>
    <style>
        
     header .parag {
    text-align: center;
    background-color: palevioletred;
    letter-spacing: 3px;
    position: absolute;
    width: 100%;
margin-top: 0%;
}

        .panier-container {
            width: 80%;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .panier-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 15px;
        }


        .produit-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 10px;
            margin-right: 20px;
        }

        .produit-details {
            flex-grow: 1;
        }

        .produit-details h3 {
            margin: 0;
            color: #333;
            font-size: 18px;
        }

        .produit-details p {
            margin: 5px 0;
            color: #555;
        }

        .quantite-prix {
            display: flex;
            align-items: center;
        }

        .quantite {
            width: 50px;
            margin-right: 20px;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: center;
        }

        .prix {
            font-size: 18px;
            color: #333;
        }

        .supprimer {
            background-color: #ff6b6b;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .supprimer:hover {
            background-color: #ff4c4c;
        }

        .panier-total {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            margin-left:85%
    
        }

        .total-prix {
            font-size: 24px;
            color: #333;
        }

        .commander {
            width: 80%;
            padding: 15px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            margin-top: 20px;
            width: 80%;
            margin: 0 auto;
          
           margin-left:10%;
          
        }

        .commander:hover {
            background-color: #555;
        }
        .panier2{
    margin-left:86%;
    margin-top: 4%;
    position: absolute;
    width: 10%;
    color: black;
    font-size: 30px;
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

        <input type="search" placeholder="Rechercher">
        <i class="fa-solid fa-magnifying-glass"></i>



        <?php
 $idc=$_COOKIE['user_id'];
 $nom=$_COOKIE['nom'];// houni jbedet l idc w nom w prenom mel cookies 
 $prenom=$_COOKIE['prenom'];
 if($idc!=0){
    ?>
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
    <h2>Mon Panier</h2>
<?php 
if(isset($_GET["idp"])&& isset($_POST["Quantity"]) ){ //isset vérifie si l'idp ou quantité dans l'url ou $post
 $idp=$_GET["idp"];
 $idc=$_COOKIE['user_id'];
 $quantity=$_POST["Quantity"];
 $prix;
 $requete2="select * from produits where idp=$idp" ;
 $resultat2=$connexion->query($requete2);
 while ($ligne = $resultat2->fetch_assoc()){
    $prix=$ligne["prixpr"];
 }

$requete1="INSERT INTO  `panier`( `id_produit`, `id_client`, `prixpr`, `quantité`,`id_commande`,prixtotal) VALUES('$idp',$idc,$prix,$quantity,0,$prix*$quantity)";
$connexion->query($requete1);}

$requete="SELECT * FROM `panier`INNER JOIN produits where produits.idp=panier.`id_produit` and `panier`.`id_client`=$idc and panier.id_commande=0";
 $resultat=$connexion->query($requete);
$somme=0;

 while ($ligne = $resultat->fetch_assoc()) {
  $somme+=$ligne["prixtotal"] ;
?>

    <div class="panier-container">
        <div class="panier-item">
            <img src="<?php echo $ligne["image"] ?>"class="produit-image">
            <div class="produit-details">
                <h3><?php echo $ligne["nompr"] ?></h3>
              
                <div class="quantite-prix">
                      <p>Prix Unité : </p>
                    <p class="prixpr"><?php echo $ligne["prixpr"] ?> <sup>TND</sup></p>
                    <br>
                    
                </div>
                <p>Quantité :<?php echo $ligne["quantité"]?></p>
                <p>Prix Total : <?php echo $ligne["prixtotal"] ?> TND</p>
            </div>
            <a href="supprimerpanier.php?id_panier=<?php  echo  $ligne["id_panier"] ; ?> ">
            <button class="supprimer"> supprimer</button> </a> 
        </div>
    </div>
<?php }?>
<div class="panier-total">
            <p>Total:</p>
            <p class="total-prix"> <?php echo $somme;?>   TND</p>
        </div>
        <form action="validationcommande.php" method="post">
            <input type="hidden" name="somme" id="somme" value=<?php echo $somme ?> >
            <button type="submit" class="commander">Commander</button>  

        </form>
     


    <footer>
        <div class="footer1">
            <div class="content">
                <div class="Row">
                    <div class="footer-colon">
                        <h4>Cosmaplus</h4>
                        <ul>
                            <li> <a href="#">Politique de vente</a></li>
                            <li> <a href="#">Notre service client tunisie</a> </li>
                            <li> <a href="#">Confidentialité</a></li>
                            <li> <a href="#">vente de maquillage en ligne</a></li>
                        </ul>
                    </div>
                    <div class="footer-colon">
                        <h4>Termes et Conditions</h4>
                        <ul>
                            <li> <a href="#">Livraison</a></li>
                            <li> <a href="#">Paiement</a></li>
                        </ul>
                    </div>
                    <div class="footer-colon">
                        <h4> suivez nous</h4>
                        <div class="social-links">
                            <a href="#"> <i class="fa-brands fa-twitter"></i></a>
                            <a href="#"> <i class="fa-brands fa-facebook"></i></a>
                            <a href="#"> <i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="footer-colon">
                        <h4>Mode de Paiement</h4>
                        <div class="paiement">
                            <a href="#"><img src="../Mon Site/image/E-dinar_logo.jpg" alt="not found"
                                    class="paiement"></a>
                            <a href="#"><img src="../Mon Site/image/logo-visa-carte-1.png" alt="not found"
                                    class="paiement"></a>
                            <a href="#"><img src="../Mon Site/image/MasterCard_Logo.svg.png" alt="not found"
                                    class="paiement"></a>
                        </div>
                    </div>
                    <div class="footer-colon">

                        <h4>Contact us</h4>
                        <ul>
                            <li><a href="#"> +216 55345663</a></li>

                        </ul>


                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
</body>

</html>