<?php
$pageTitle = "Candidature - K-POP Event";  // Titre spécifique de la page
include('header.php');
?>

<section class="candidature" id="candidature">
    <h2 class="text-center mt-4">Candidature</h2>
    <form method="POST" action="" class="mx-auto">
        <div class="form-group text-center">
            <label for="teamName">Nom de l'équipe</label>
            <input type="text" class="form-control" id="teamName" name="team_name" required>
        </div>
        <div class="form-group text-center">
            <label for="membersCount">Nombre de personnes</label>
            <input type="number" class="form-control" id="membersCount" name="number_of_members" required>
        </div>
        <div class="form-group text-center">
            <label for="city">Ville</label>
            <input type="text" class="form-control" id="city" name="city" required>
        </div>
        <div class="form-group text-center">
            <label for="leaderFirstName">Prénom du chef d'équipe</label>
            <input type="text" class="form-control" id="leaderFirstName" name="leader_first_name" required>
        </div>
        <div class="form-group text-center">
            <label for="leaderLastName">Nom de famille du chef d'équipe</label>
            <input type="text" class="form-control" id="leaderLastName" name="leader_last_name" required>
        </div>
        <div class="form-group text-center">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group text-center">
            <label for="phone">Téléphone</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>
        <button type="submit" class="btn btn-primary text-center">Soumettre</button>
    </form>

    <?php
    // Connexion à la base de données
    $servername = "localhost"; // ou l'adresse de ton serveur
    $username = "root"; // ton nom d'utilisateur MySQL
    $password = ""; // laisse vide si tu n'as pas de mot de passe
    $dbname = "base"; // nom de ta base de données

    // Créer une connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Échec de la connexion : " . $conn->connect_error);
    }

    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données du formulaire
        $team_name = $_POST['team_name'];
        $number_of_members = $_POST['number_of_members'];
        $city = $_POST['city'];
        $leader_first_name = $_POST['leader_first_name'];
        $leader_last_name = $_POST['leader_last_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        // Créer le nom complet du leader
        $team_leader_name = "$leader_first_name $leader_last_name";

        // Préparer la requête SQL pour insérer les données
        $sql = "INSERT INTO applications (team_name, number_of_members, city, team_leader_name, team_leader_email, team_leader_phone) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        
        // Corrigez ici en utilisant la variable $team_leader_name
        $stmt->bind_param("sissss", $team_name, $number_of_members, $city, $team_leader_name, $email, $phone);

        // Exécuter la requête
        if ($stmt->execute()) {
            echo "<div class='alert alert-success mt-3'>Candidature soumise avec succès !</div>";
        } else {
            echo "<div class='alert alert-danger mt-3'>Erreur : " . $stmt->error . "</div>";
        }

        // Fermer la déclaration
        $stmt->close();
    }

    // Fermer la connexion
    $conn->close();
    ?>
</section>
<?php include('footer.php'); ?>