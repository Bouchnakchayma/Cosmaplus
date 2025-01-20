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
                    <li><a href="#">Paramétre</a></li>
                  
                </ul>
            </nav>
        </header>
    </body>
<?php 



// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nompr=$_POST["nompr"];
    $descriptionpr=$_POST["descriptionpr"];
    $catégoriepr=$_POST["catégoriepr"];
    $prixpr=$_POST["prixpr"];
    $typepr=$_POST["typepr"];
    // Vérifier si un fichier a été téléchargé avec succès
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        // Emplacement de sauvegarde du fichier sur le serveur
        $uploadDir = "uploads/";
        $uploadFile = $uploadDir . basename($_FILES["image"]["name"]);

        // Déplacer le fichier téléchargé vers l'emplacement de sauvegarde
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $uploadFile)) {
            // Enregistrement du chemin dans la base de données
            $bdd = new PDO('mysql:host=localhost;dbname=monsite', 'root', '');// cnx base de données
            $image = $uploadFile;
            $query = $bdd->prepare("INSERT INTO  `produits`( `nompr`, `descriptionpr`, `catégoriepr`, `prixpr`, `image`,`typepr`) VALUES('$nompr','$descriptionpr','$catégoriepr',$prixpr,:image,'$typepr')");
            $query->bindParam(":image", $image);
            $query->execute();

            echo "L'image a été téléchargée avec succès et enregistrée dans la base de données.";
        } else {
            echo "Une erreur s'est produite lors du téléchargement du fichier.";
        }
    } else {
        echo "Aucun fichier n'a été téléchargé ou une erreur s'est produite.";
    }
}
?>
<script>
    window.location.href="addproducts.html"
    </script>

