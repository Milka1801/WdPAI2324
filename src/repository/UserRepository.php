<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';

class UserRepository extends repository
{

    public function getUser(string $email): ?User
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users WHERE email = :email
        ');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            $user['email'],
            $user['password'],
            $user['name']

        );
    }

    public function addUser(User $user): bool
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO users (email, password, name)
            VALUES (:email, :password, :name)
        ');

        $email = $user->getEmail();
        $password = $user->getPassword();
        $name = $user->getName();

        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);

        return $stmt->execute();
    }


}