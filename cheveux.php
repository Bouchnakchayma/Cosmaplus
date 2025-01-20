<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Mon Site/css/style.css">
    <title>cheveux</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<!DOCTYPE html>
<html lang="en">
<?php
$serveur = "localhost";     
$utilisateur = "root"; 
$motDePasse = ""; 
$nomDeLaBase = "monsite";
$connexion = new mysqli($serveur,$utilisateur,$motDePasse,$nomDeLaBase); 
?>
</head>
<!DOCTYPE html>
<html lang="en">
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
 $nom=$_COOKIE['nom'];
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
        <a href="ajouterpanier.php" class="panier"><i class="fa-solid fa-basket-shopping"></i></a>
    </header>
<?php
?>
<main>
    <section>
    <?php
$requete="select * from produits where catégoriepr='cheveux'";
$resultat=$connexion->query($requete);
while ($ligne = $resultat->fetch_assoc()) {
?>
   
   <div class="bloc">
      

      <img src="<?php echo $ligne["image"] ?>" alt="">
      <p style="text-align: center;"><?php echo $ligne["nompr"] ?></p>
      <div class="par">
          <p class="p23"><?php echo $ligne["prixpr"] ?> <sup>TND</sup> </p>
      </div> <br>
      <a href="produitdescription.php?id=<?php  echo  $ligne["idp"] ; ?>">  <button class="button">Ajouter Au Panier </button> </a>
  </div>
        

       
<?php  }?>
 </section>
</main>


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
