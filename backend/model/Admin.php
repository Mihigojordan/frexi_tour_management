<?php

class User
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getUserByEmail($email)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute(['email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createUser($email, $password, $name, $phoneNumber, $profileImage)
    {
        $stmt = $this->pdo->prepare("INSERT INTO users (email, password, name, profile_image) VALUES (:email, :password, :name, :profile_image)");
        return $stmt->execute([
            'email' => $email, 
            'password' => password_hash($password, PASSWORD_BCRYPT),
            'name' => $name, 
            'phoneNumber' => $phoneNumber,
            'profile_image' => $profileImage
        ]);
    }

    public function updateUserProfile($userId, $name, $profileImage)
    {
        $stmt = $this->pdo->prepare("UPDATE users SET name = :name, profile_image = :profile_image WHERE id = :id");
        return $stmt->execute(['name' => $name, 'profile_image' => $profileImage, 'id' => $userId]);
    }

    public function getUserById($userId)
    {
        $stmt = $this->pdo->prepare("SELECT id, email, name, profile_image FROM users WHERE id = :id");
        $stmt->execute(['id' => $userId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>
