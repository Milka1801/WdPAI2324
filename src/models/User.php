<?php

class User {
    private $id;
    private $email;
    private $password;
    private $name;
    private $surname;
    private $role;

    public function __construct(
        //int $id,
        string $email,
        string $password,
        string $name,
        string $surname = null,
        string $role='admin'
    ) {
        //$this->id = $id;
        $this->email = $email;
        $this->password=$password;
        $this->name = $name;
        $this->surname = $surname;

        // Ustaw rolę na "user" tylko gdy nie podano innej roli
        $this->role = $role ?: 'user';
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }


    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): void
    {
        $this->role = $role;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }


    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }
}
?>
