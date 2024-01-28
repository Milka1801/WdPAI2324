<?php
//
//require_once 'AppController.php';
//require_once __DIR__ .'/../models/Project.php';
//require_once __DIR__.'/../repository/ProjectRepository.php';
//
//
//class RecipeController extends AppController {
//    private $messages = [];
//    private $projectRepository;
//    const MAX_FILE_SIZE = 1024*1024;
//    const SUPPORTED_TYPES = ['image/png', 'image/jpeg'];
//    const UPLOAD_DIRECTORY = '/../public/uploads/';
//
//
//    public function __construct()
//    {
//       parent::__construct();
//        $this->projectRepository = new ProjectRepository();
//    }
//
//
//    public function addProjects()
//    {
//        if ($this->isPost() && is_uploaded_file($_FILES['recipeFile']['tmp_name']) && $this->validate($_FILES['recipeFile'])) {
//
//            move_uploaded_file(
//                $_FILES['recipeFile']['tmp_name'],
//                dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['recipeFile']['name']
//            );
//
//            $project = new Project($_POST['recipeName'], $_POST['recipeDescription'], $_FILES['recipeFile']['name']);
//            $this->projectRepository->addProjects($project);
//
//
//
//            return $this->render('myRecipes', ['messages'=> $this->messages]);
//        }
//       $this->render('upload', ['messages' => $this->messages]);
//    }
//
//    private function validate(array $recipeFile) : bool
//    {
//        if ($recipeFile['size'] > self::MAX_FILE_SIZE) {
//            $this->messages[] = 'File is too large for destination file system.';
//            return false;
//        }
//        if (!isset($recipeFile['type']) && !in_array($recipeFile['type'], self::SUPPORTED_TYPES)) {
//            $this->messages[] = 'File type is not supported';
//            return false;
//        }
//        return true;
//    }
//}


//require_once 'AppController.php';
//require_once __DIR__ . '/../models/Project.php';
//
//class RecipeController extends AppController
//{
//
//    const MAX_FILE_SIZE = 1024 * 1024;
//    const SUPPORTED_TYPES = ['image/png', 'image/jpeg'];
//    const UPLOAD_DIRECTORY = '/../public/uploads/';
//
//    private $messages = [];
//
//    public function addProjects()
//    {
//        if ($this->isPost() && is_uploaded_file($_FILES['recipeFile']['tmp_name']) && $this->validate($_FILES['recipeFile'])) {
//            move_uploaded_file(
//                $_FILES['recipeFile']['tmp_name'],
//                dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['recipeFile']['name']
//            );
//
//            // TODO create new project object and save it in database
//            $project = new Project($_POST['recipeName'], $_POST['recipeDescription'], $_FILES['recipeFile']['tmp_name']);
//
//            return $this->render('myRecipes', ['messages' => $this->messages]);
//        }
//        $this->render('upload', ['messages' => $this->messages]);
//    }
//
//    private function validate(array $recipeFile): bool
//    {
//        if ($recipeFile['size'] > self::MAX_FILE_SIZE) {
//            $this->messages[] = 'File is too large for destination file system.';
//            return false;
//        }
//
//        if (!isset($recipeFile['type']) || !in_array($recipeFile['type'], self::SUPPORTED_TYPES)) {
//            $this->messages[] = 'File type is not supported.';
//            return false;
//        }
//        return true;
//    }
//}


require_once 'AppController.php';
require_once __DIR__ . '/../models/Project.php';

class RecipeController extends AppController
{

    const MAX_FILE_SIZE = 1024 * 1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpeg'];
    const UPLOAD_DIRECTORY = '/../public/uploads/';

    private $message = [];

    public function addProjects()
    {
        if ($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])) {
            move_uploaded_file(
                $_FILES['file']['tmp_name'],
                dirname(__DIR__) . self::UPLOAD_DIRECTORY . $_FILES['file']['name']
            );

            // TODO create new project object and save it in database
            $project = new Project($_POST['title'], $_POST['description'], $_FILES['file']['name']);

            return $this->render('project', ['messages' => $this->message]);
        }
        return $this->render('upload', ['messages' => $this->message]);
    }

    private function validate(array $file): bool
    {
        if ($file['size'] > self::MAX_FILE_SIZE) {
            $this->message[] = 'File is too large for destination file system.';
            return false;
        }

        if (!isset($file['type']) || !in_array($file['type'], self::SUPPORTED_TYPES)) {
            $this->message[] = 'File type is not supported.';
            return false;
        }
        return true;
    }
}
