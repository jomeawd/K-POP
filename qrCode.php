<?php
// Inclure la bibliothèque PHP QR Code
include "phpqrcode/qrlib.php";

// Vérifier si l'inclusion fonctionne
if (file_exists("phpqrcode/qrlib.php")) {
    echo "Fichier inclus avec succès !<br>";
} else {
    die("Erreur : Fichier phpqrcode/qrlib.php introuvable.");
}

// Le lien de linktr.ee
$contenu = "https://linktr.ee/k_dance";

// Chemin du fichier QR Code généré
$fichier = "mon_qrcode.png";

// Générer le QR Code et l'enregistrer dans un fichier
QRcode::png($contenu, $fichier, QR_ECLEVEL_L, 10, 2);

echo "QR Code généré : <img src='$fichier' />";
?>
