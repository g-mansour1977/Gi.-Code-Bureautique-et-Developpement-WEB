# Gi.Code Bureautique et Développement Web

## Description
Projet e-learning pour apprendre Word, Excel, PowerPoint et développement web.  
Il inclut un système d’utilisateurs (admin, prof, étudiant), des cours et des quiz.

---

## Prérequis
- [XAMPP](https://www.apachefriends.org/fr/index.html) installé sur Windows
- Navigateur web (Chrome, Firefox, Edge)
- Git (optionnel, si clonage depuis GitHub)

---

## Installation

1. **Placer le projet dans le dossier XAMPP**
   - Copier le dossier du projet dans :
     ```
     C:\xampp\htdocs\
     ```
   - Exemple :
     ```
     C:\xampp\htdocs\Gi.-Code-Bureautique-et-Developpement-WEB
     ```

2. **Démarrer Apache et MySQL**
   - Ouvrir le **XAMPP Control Panel**
   - Cliquer sur **Start** pour Apache et MySQL

3. **Créer la base de données**
   - Ouvrir [phpMyAdmin](http://localhost/phpmyadmin)
   - Créer une base de données nommée `elearning`
   - Importer le script SQL fourni (`elearning.sql`) pour créer les tables et insérer l’admin

4. **Configurer la connexion à la base**
   - Copier le fichier modèle :
     ```
     config.example.php → config.php
     ```
   - Modifier `config.php` pour mettre vos identifiants MySQL locaux :
     ```php
     <?php
     $host = "localhost";   // NE PAS changer
     $user = "root";        // Utilisateur MySQL par défaut sous XAMPP
     $pass = "";            // Mot de passe MySQL (vide par défaut)
     $db   = "elearning";   // Nom exact de la base
     ?>
     ```

   ⚠️ **Important :**
   - Ne jamais mettre de mot de passe réel dans un dépôt public
   - Même un mot de passe vide ne doit être utilisé que pour un environnement local
   - Garder le vrai `config.php` **en local** ou sur un serveur privé

---

## Connexion à l’application

- Page de login :  
