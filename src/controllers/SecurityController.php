<?php
session_start();
require_once 'AppController.php';
require_once __DIR__ .'/../models/User.php';
require_once __DIR__ . '/../repository/UserRepository.php';

class SecurityController extends AppController {

//    public function login()
//    {
//        $userRepository = new UserRepository();
//
//        if (!$this->isPost()) {
//            return $this->render('login');
//        }
//
//        $email = $_POST['email'];
//        $password = $_POST['password'];
//
//        $user = $userRepository->getUser($email);
//
//        if (!$user) {
//            return $this->render('login', ['messages' => ['User not found!']]);
//        }
//
//        if ($user->getEmail() !== $email) {
//            return $this->render('login', ['messages' => ['User with this email not exist!']]);
//        }
//
//        if ($user->getPassword() !== $password) {
//            return $this->render('login', ['messages' => ['Wrong password!']]);
//        }
//
//        $url = "http://$_SERVER[HTTP_HOST]";
//        header("Location: {$url}/projects");
//    }

    public function login()
    {
        $userRepository = new UserRepository();

        if (!$this->isPost()) {
            return $this->render('login');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($email === 'admin@admin' && $password === 'admin') {
            // Ustawienie sesji dla administratora
            $_SESSION['logged'] = true;
            $_SESSION['user'] = [
                'email' => $email,
                'name' => 'Admin', // Możesz dodać nazwę administratora
                'role' => 'admin'
            ];

            // Przekierowanie na stronę dla administratora
            $url = "http://$_SERVER[HTTP_HOST]/admin";
            header("Location: $url");
            exit(); // Zakończ wykonanie skryptu po przekierowaniu
        }

        // Jeśli nie jest to admin, sprawdź pozostałych użytkowników
        $user = $userRepository->getUser($email);

        if (!$user) {
            return $this->render('login', ['messages' => ['User not found!']]);
        }

        if ($user->getPassword() !== $password) {
            return $this->render('login', ['messages' => ['Wrong password!']]);
        }

        $_SESSION['logged'] = true;
        $_SESSION['user'] = [
            'email' => $user->getEmail(),
            'name' => $user->getName(),
            'role' => $user->getRole()
        ];

        // Przekierowanie na stronę z projektami dla zwykłych użytkowników
        $url = "http://$_SERVER[HTTP_HOST]/projects";
        header("Location: $url");
        exit(); // Zakończ wykonanie skryptu po przekierowaniu
    }




//    public function login()
//    {
//        $userRepository = new UserRepository();
//
//        if (!$this->isPost()) {
//            return $this->render('login');
//        }
//
//        $email = $_POST['email'];
//        $password = $_POST['password'];
//
//        $user = $userRepository->getUser($email);
//
//        if (!$user || !password_verify($password, $user->getPassword())) {
//            return $this->render('login', ['messages' => ['Invalid credentials']]);
//        }
//
//        // Sprawdź rolę użytkownika
//        $role = $user->getRole();
//
//        // Przekieruj w zależności od roli
//        if ($role === 'admin') {
//            $url = "http://$_SERVER[HTTP_HOST]/admin"; // Zakładam, że masz trasę dla panelu administratora
//        } else {
//            $url = "http://$_SERVER[HTTP_HOST]/projects";
//        }
//
//        echo "<script>window.location.replace('$url');</script>";
//    }





    public function logout()
    {
        // Rozpocznij sesję (lub wznow sesję, jeśli już istnieje)
       // session_start();

        // Zniszcz sesję
        session_destroy();

        // Przekieruj na stronę logowania
        $url = "http://$_SERVER[HTTP_HOST]/login";
        header("Location: {$url}");
    }
//    public function register()
//    {
//        if (!$this->isPost()) {
//            return $this->render('register');
//        }
//
//        $email = $_POST['email'];
//        $password = $_POST['password'];
//        $confirmedPassword = $_POST['confirmedPassword'];
//        $name = $_POST['name'];
//        $surname = $_POST['surname'];
//        $phone = $_POST['phone'];
//
//        if ($password !== $confirmedPassword) {
//            return $this->render('register', ['messages' => ['Please provide proper password']]);
//        }
//
//        //TODO try to use better hash function
//        $user = new User($email, md5($password), $name, $surname);
//        $user->setPhone($phone);
//
//        $this->userRepository->addUser($user);
//
//        return $this->render('login', ['messages' => ['You\'ve been succesfully registrated!']]);
//    }

        public function register()
    {
        $userRepository = new UserRepository();

        if (!$this->isPost()) {
            return $this->render('register');
        }

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phonenumber'];
        $password = $_POST['password'];

        if($userRepository->getUser($email)){
            return $this->render('register', ['messages' => ['User with this email already exist!']]);
        }
        if(!preg_match('/\S+@\S+\.\S+/', $email)){
            return $this->render('register', ['messages' => ['Email in wrong format!']]);
        }

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $user = new User($email, $hashedPassword, $name, null, 'user');

        $userRepository->addUser($user);

        return $this->render('login', ['messages' => ['You\'ve been succesfully registrated!']]);
    }


//    public function profile_account()
//    {
//        $userId = $_SESSION['user']['id'];
//        //$userNumberReadBooks = $this->booksRepository->getUserNumberReadBooks($userId);
//        //$this->render('profile_account', ['userNumberReadBooks' => $userNumberReadBooks]);
//    }

}