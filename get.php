<?php
// Paramètres de connexion à la base de données (à personnaliser)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fetch";

try {
    // Créez une connexion PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Configurez PDO pour rapporter les erreurs SQL
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Exécutez votre requête SQL (à personnaliser)
    $sql = "SELECT * FROM name";
    $stmt = $conn->query($sql);

    // Récupérez les données dans un tableau associatif
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Retournez les données au format JSON
    header('Content-Type: application/json');
    echo json_encode($data);
} catch (PDOException $e) {
    // En cas d'erreur de connexion ou d'exécution de la requête
    echo "Erreur : " . $e->getMessage();
}

// Fermez la connexion PDO
$conn = null;
?>
