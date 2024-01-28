<!---->
<!---->
<?php
//require_once 'AppController.php';
//require_once __DIR__ . '/../models/User.php';
//require_once __DIR__ . '/../repository/UserRepository.php';
//
//class RegistrationController extends AppController
//{
//    public function register()
//    {
//        $userRepository = new UserRepository();
//
//        if ($this->isPost()) {
//            $name = $_POST['name'];
//            $email = $_POST['email'];
//            $password = $_POST['password'];
//            $confirmPassword = $_POST['confirm_password'];
//
//            // Sprawdź, czy hasła się zgadzają
//            if ($password !== $confirmPassword) {
//                return $this->render('register', ['messages' => ['Passwords do not match']]);
//            }
//
//            // Sprawdź, czy użytkownik o podanym emailu już istnieje
//            if ($userRepository->getUser($email)) {
//                return $this->render('register', ['messages' => ['User with this email already exists']]);
//            }
//
//            // Utwórz nowego użytkownika
//            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
//            $user = new User($email, $hashedPassword, $name);
//
//            // Dodaj użytkownika do bazy danych
//            if ($userRepository->addUser($user)) {
//                // Przekieruj do strony logowania lub innej strony po rejestracji
//                return $this->redirectToRoute('login'); // Zakładam, że masz zdefiniowaną trasę 'login' w swoim systemie routingu.
//            } else {
//                // Obsłuż błąd dodawania użytkownika
//                return $this->render('register', ['messages' => ['Error during registration']]);
//            }
//        }
//
//        return $this->render('register');
//    }
//}
//
//$registrationController = new RegistrationController();
//$registrationController->register();
//?>
