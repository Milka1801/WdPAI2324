<?php
//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//    // Sprawdź, czy to wysłanie formularza rejestracji
//    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['password'])) {
//        $name = $_POST['name'];
//        $email = $_POST['email'];
//        $phone = $_POST['phone'];
//        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
//
//        // Wstaw dane użytkownika do tabeli "users"
//        $query = "INSERT INTO users (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$password')";
//        $result = pg_query($db, $query);
//
//        if ($result) {
//            echo "Rejestracja udana!";
//        } else {
//            echo "Rejestracja nieudana!";
//        }
//    }
//
//    // Sprawdź, czy to wysłanie formularza logowania
//    // Dodaj logikę logowania, jeśli jest to konieczne
//}
//?>
