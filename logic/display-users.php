<?php
require "../managers/UserManager.class.php";
require "../templates/user-list.phtml";

// Instancier une instance de la classe UserManager
$userManager = new UserManager();

// Appeler la méthode loadUsers pour récupérer tous les utilisateurs
$users = $userManager->loadUsers();

// Afficher la liste des utilisateurs
if (count($users) > 0) {
    foreach ($users as $user) {
        echo $user->getUsername() . " " . $user->getEmail() . " " . $user->getRole() . "\n";
    }
} else {
    echo "Il n'y a aucun utilisateur dans la base de données.";
}

?>
