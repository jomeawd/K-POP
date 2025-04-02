CREATE DATABASE IF NOT EXISTS base;
USE base;

CREATE TABLE IF NOT EXISTS applications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    team_name VARCHAR(100) NOT NULL,
    number_of_members INT NOT NULL,
    city VARCHAR(100) NOT NULL,
    team_leader_name VARCHAR(100) NOT NULL,
    team_leader_email VARCHAR(100) NOT NULL,
    team_leader_phone VARCHAR(15) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE votes (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Identifiant unique pour chaque vote
    user_name VARCHAR(255) NOT NULL,  -- Nom de l'utilisateur
    message TEXT,                     -- Message facultatif
    ip_address VARCHAR(45) NOT NULL,  -- Adresse IP de l'utilisateur
    team_choice VARCHAR(255) NOT NULL, -- Choix de l'équipe
    vote_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Date et heure du vote
);

