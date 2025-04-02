<?php
$pageTitle = "K-POP Event - Battle du Siècle";  // Titre optimisé
include('header.php');
?>

<!-- Section Héro avec animation Bootstrap -->
<section class="hero d-flex justify-content-center align-items-center" id="home">
    <div class="container text-center animate__animated animate__fadeIn">
        <h1 class="text-white animate__animated animate__zoomIn">Venez tenter votre chance à la battle du siècle !</h1>
        <a href="/candidature.php" class="btn btn-primary btn-lg mt-4 animate__animated animate__bounceIn animate__delay-1s">Je participe</a>
    </div>
</section>

<!-- Introduction avec composants Bootstrap -->
<section class="py-5">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12">
                <h2 class="mb-3">Bienvenue à l'événement K-pop de l'année</h2>
                <div class="divider mx-auto"></div>
            </div>
        </div>
        
        <!-- Image à droite, texte à gauche avec Bootstrap -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
                <div class="card border-0 shadow">
                    <img src="/images/image6.jpg" alt="K-pop Event" class="card-img-top">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="card border-0 shadow p-4">
                    <div class="card-body">
                        <h3 class="card-title text-primary">Dansez avec les meilleurs</h3>
                        <p class="card-text">Rejoignez les danseurs les plus talentueux de France lors de notre bataille annuelle de K-pop. Cet événement unique rassemble les fans et les performers pour célébrer la culture K-pop dans une ambiance électrique.</p>
                        <p class="card-text">Que vous soyez débutant ou expérimenté, venez montrer vos talents et peut-être remporter le titre de champion!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section combinée Les Randoms et Événements en France -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12">
                <h2 class="mb-3">Les Randoms et Nos Événements en France</h2>
                <div class="divider mx-auto"></div>
            </div>
        </div>
        
        <!-- Contenu Les Randoms -->
        <div class="bg-light rounded p-4 shadow-sm mb-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p class="text-center">Notre groupe de danseurs "Les Randoms" sera présent pour vous offrir une performance exceptionnelle et partager leur passion pour la K-pop. Ne manquez pas leur showcase qui promet d'être mémorable!</p>
                </div>
            </div>
        </div>
        
        <!-- Cartes des villes -->
        <div class="row">
            <!-- Bordeaux -->
            <div class="col-md-4 mb-4">
                <div class="city-card position-relative">
                    <img src="/images/bordeaux.jpg" alt="Bordeaux" class="img-fluid rounded">
                    <div class="overlay d-flex flex-column justify-content-center align-items-center text-center">
                        <h3>Bordeaux</h3>
                        <p class="mb-3">15-16 Avril 2025</p>
                        <a href="bordeaux.php" class="btn btn-warning btn-sm">Voir plus</a>
                    </div>
                </div>
            </div>

            <!-- Lyon -->
            <div class="col-md-4 mb-4">
                <div class="city-card position-relative">
                    <img src="/images/lyon.jpg" alt="Lyon" class="img-fluid rounded">
                    <div class="overlay d-flex flex-column justify-content-center align-items-center text-center">
                        <h3>Lyon</h3>
                        <p class="mb-3">22-23 Avril 2025</p>
                        <a href="lyon.php" class="btn btn-warning btn-sm">Voir plus</a>
                    </div>
                </div>
            </div>

            <!-- Paris -->
            <div class="col-md-4 mb-4">
                <div class="city-card position-relative">
                    <img src="/images/paris1.jpg" alt="Paris" class="img-fluid rounded">
                    <div class="overlay d-flex flex-column justify-content-center align-items-center text-center">
                        <h3>Paris</h3>
                        <p class="mb-3">29-30 Avril 2025</p>
                        <a href="paris.php" class="btn btn-warning btn-sm">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section finale avec image utilisant Bootstrap -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="card border-0 shadow">
                    <img src="/images/image7.jpg" alt="K-pop Community" class="card-img-top">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card border-0 shadow p-4">
                    <div class="card-body">
                        <h3 class="card-title text-primary">Rejoignez la communauté K-pop</h3>
                        <p class="card-text">Notre événement n'est pas seulement une compétition, c'est aussi l'occasion de rencontrer d'autres fans, d'échanger et de partager votre passion pour la K-pop dans une ambiance conviviale et festive.</p>
                        <a href="#inscription" class="btn btn-outline-primary mt-3">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Contact avec composants Bootstrap -->
<section class="bg-dark text-white py-5" id="contact">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12">
                <h2 class="text-white mb-3">Contactez-nous</h2>
                <div class="divider bg-light mx-auto"></div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white border-light">
                    <div class="card-body text-center">
                        <i class="fas fa-phone fa-3x mb-3 text-primary"></i>
                        <p>Téléphone: <strong>(+33) 7 82 42 66 80</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white border-light">
                    <div class="card-body text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-primary"></i>
                        <p>Email: <strong>hopeonthestreet.in@gmail.com</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white border-light">
                    <div class="card-body text-center">
                        <i class="fas fa-hashtag fa-3x mb-3 text-primary"></i>
                        <p>Suivez-nous sur les réseaux sociaux</p>
                        <div class="mt-3">
                            <a href="#" class="btn btn-primary btn-sm rounded-circle mx-1"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-primary btn-sm rounded-circle mx-1"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-primary btn-sm rounded-circle mx-1"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>