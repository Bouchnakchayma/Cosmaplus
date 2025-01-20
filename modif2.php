<?php 
$serveur = "localhost";      
$utilisateur = "root"; 
$motDePasse = ""; 
$nomDeLaBase = "monsite";
$connexion = new mysqli($serveur,$utilisateur,$motDePasse,$nomDeLaBase); 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idp=$_GET["idp"];
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
            $query = $bdd->prepare("UPDATE `produits` SET `nompr`='$nompr',`descriptionpr`='$descriptionpr',`catégoriepr`='$catégoriepr',`prixpr`=$prixpr,`image`=:image ,`typepr`='$typepr' WHERE `idp`=$idp");
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

 $connexion->close(); 
?>
<script>
window.location.href="produits.php"
</script>

