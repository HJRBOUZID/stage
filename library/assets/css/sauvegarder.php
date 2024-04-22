<?php
// Inclure le fichier de configuration de la base de données
include('includes/config.php');

// Définir une variable pour stocker le message
$message = '';

// Vérifiez si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérez les données du formulaire
    $user_id = $_SESSION['id']; // Supposons que vous stockez l'ID de l'utilisateur dans une session
    $livre_id = $_POST['livre_id'];
    $livre_nom = $_POST['livre_nom'];
    $livre_prix = $_POST['livre_prix'];
    $quantite = $_POST['quantite'];

    // Écrivez une requête SQL pour insérer les données dans la table user_chart
    $sql = "INSERT INTO user_chart (user_id, livre_id, livre_nom, livre_prix, quantite) VALUES (:user_id, :livre_id, :livre_nom, :livre_prix, :quantite)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $query->bindParam(':livre_id', $livre_id, PDO::PARAM_INT);
    $query->bindParam(':livre_nom', $livre_nom, PDO::PARAM_STR);
    $query->bindParam(':livre_prix', $livre_prix, PDO::PARAM_STR);
    $query->bindParam(':quantite', $quantite, PDO::PARAM_INT);

    // Exécutez la requête SQL
    if ($query->execute()) {
        $message = "Le livre '$livre_nom' a été sauvegardé avec succès.";
    } else {
        $message = "Erreur lors de l'enregistrement du livre.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sauvegarde du livre</title>
</head>
<body>
    <!-- Afficher le message -->
    <p><?php echo $message; ?></p>
</body>
</html>
