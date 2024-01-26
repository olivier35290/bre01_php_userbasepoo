<?php
require "../config/connexion.php";


class UserManager
{
    private array $users = [];
    private PDO $db;

    public function __construct()
    {
        
        $this->db = new PDO(
            $connexionString,
            $user,
            $password
            
        );
    }

    public function getUsers(): array
    {
        return $this->users;
    }

    public function setUsers(array $users): void
    {
        $this->users = $users;
    }

    public function loadUsers(): void
    {
    $query = "SELECT * FROM users";
    $statement = $this->db->prepare($query);
    $statement->execute();

    $users = [];
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $user = new User($row['username'], $row['email'], $row['password'], $row['role']);
        $user->setId($row['id']);

        $users[] = $user;
    }

    $this->setUsers($users);
    }

    public function saveUser(User $user): void
    {
        // TODO: Code le comportement de la méthode saveUser
    }

    public function deleteUser(User $user): void
    {
        // TODO: Code le comportement de la méthode deleteUser
    }
}



?>