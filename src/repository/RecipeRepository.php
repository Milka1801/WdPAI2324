<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';

class RecipeRepository extends repository
{

    public function getProject(string $id): ?Project
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM recipe WHERE recipe_id = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $project = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($project == false) {
            return null;
        }

        return new Project(
            $recipe['title'],
            $recipe['description'],
            $recipe['image']


        );
    }

//    public function addUser(User $user): bool
//    {
//        $stmt = $this->database->connect()->prepare('
//            INSERT INTO users (email, password, name)
//            VALUES (:email, :password, :name)
//        ');
//
//        $email = $user->getEmail();
//        $password = $user->getPassword();
//        $name = $user->getName();
//
//        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
//        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
//        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
//
//        return $stmt->execute();
//    }
//
    public function addProjects(Project $project):void
    {
        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('
        INSERT INTO recipe (name, cuisine, description, file_path)
        VALUES (?,?,?,?)
        ');

        $cuisine = "Poland";
        $stmt->execute([
            $project->getTitle(),
            $cuisine,
            $project->getDescription(),
            $project->getImage()
        ]);
    }

//    public function getProjects(): array
//    {
//        $result = [];
//
//        $stmt = $this->database->connect()->prepare('
//        SELECT * FROM recipe
//        ');
//        $stmt->execute();
//        $myRecipes = $stmt->fetchAll(PDO::FETCH_ASSOC);
//
//        foreach($myRecipes as $recipe) {
//            $result[] = new Project(
//                $recipe['title'],
//                $recipe['description'],
//                $recipe['image']
//            );
//        }
//        return $result;
//    }




}