<?php
// Définir le titre de la page
$pageTitle = "Candidature - K-POP Event";
include('header.php');

// Connexion à la base de données
$servername = "localhost"; // Adresse du serveur
$username = "root"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe MySQL (vide par défaut)
$dbname = "base"; // Nom de la base de données

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Obtenir l'adresse IP de l'utilisateur
$user_ip = $_SERVER['REMOTE_ADDR'];

// Vérifier si l'utilisateur a déjà voté
$sql = "SELECT COUNT(*) AS vote_count FROM votes WHERE ip_address = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user_ip);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if ($row['vote_count'] > 0) {
    echo "<div class='alert alert-success text-center'>Votre vote pour l'équipe a été enregistré!</div>";
    die("<div class='alert alert-info text-center'>Merci pour votre participation, vous avez déjà voté.</div>");
}

// Si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    $user_name = htmlspecialchars($_POST['user_name']);
    $team = htmlspecialchars($_POST['team']);
    $message = htmlspecialchars($_POST['message']);

    // Préparer la requête pour insérer les données
    $sql = "INSERT INTO votes (user_name, message, ip_address, team_choice) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $user_name, $message, $user_ip, $team);

    // Exécuter la requête
    if ($stmt->execute()) {
        header("Location: vote.php?success=1");
    } else {
        echo "<div class='alert alert-danger text-center'>Erreur : " . $stmt->error . "</div>";
    }

    // Fermer la déclaration
    $stmt->close();
}

// Fermer la connexion
$conn->close();
?>

<section class="vote mx-auto" id="vote">
    <h2 class="text-center mt-4">Vote</h2>
    <form method="POST" action="vote.php">
        <div class="form-group">
            <label for="userName">Votre Nom :</label>
            <input type="text" id="userName" name="user_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="teamSelect">Choisissez votre équipe :</label>
            <select id="teamSelect" name="team" class="form-control" required>
                <option value="A">Équipe A</option>
                <option value="B">Équipe B</option>
                <option value="C">Équipe C</option>
            </select>
        </div>
        <div class="form-group">
            <label for="message">Message (facultatif) :</label>
            <textarea id="message" name="message" class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer votre vote</button>
    </form>
</section>

<?php include('footer.php'); ?>


