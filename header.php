<?php
    $currentPage = basename($_SERVER['PHP_SELF']); // Récupère le nom du fichier actuel
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>K-POP Event</title>
        
        <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="animate/animate.min.css" rel="stylesheet">
        
        <link rel="stylesheet" href="style.css">
        <script src="script.js" defer></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="index.php#home">
                    <img src="images/logoKDB.png" alt="Logo" width="60" height="60" class="me-2">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ms-4"> <!-- Ajout de ms-4 pour espacer le menu -->
                        <li class="nav-item"><a class="nav-link <?php echo ($currentPage == 'candidature.php') ? 'active' : ''; ?>" href="candidature.php">Candidature</a></li>
                        <li class="nav-item"><a class="nav-link <?php echo ($currentPage == 'vote.php') ? 'active' : ''; ?>" href="vote.php">Vote</a></li>
                        <li class="nav-item"><a class="nav-link <?php echo ($currentPage == 'info.php') ? 'active' : ''; ?>" href="info.php">Info</a></li>
                        <li class="nav-item"><a class="nav-link <?php echo ($currentPage == 'quiSommeNous.php') ? 'active' : ''; ?>" href="quiSommeNous.php">Qui Sommes Nous</a></li>
                        <li class="nav-item"><a class="nav-link <?php echo ($currentPage == 'partenaires.php') ? 'active' : ''; ?>" href="partenaires.php">Partenaires</a></li>
                        <li class="nav-item"><a class="nav-link <?php echo ($currentPage == 'index.php#contact') ? 'active' : ''; ?>" href="index.php#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    </body>
</html>
