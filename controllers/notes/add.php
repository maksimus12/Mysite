<?php 

require_once 'Validator.php';



$pageName = "Add new note";

$dbInfo = require_once 'config/config.php';
$conn = new Database($dbInfo['database'],);

if(isset($_POST['submit'])){

    $errors = [];

    if(Validator::string($_POST['body'])){
        $errors['body'] = "Field can't be empty";
    }

    if(empty($errors)){
        $conn->query('INSERT INTO posts(body, user_id) VALUES(:body, :user_id)', [

            'body' => $_POST['body'],
            'user_id' => 2
        
        ]);
    }
  
}


require_once 'views/notes/add.view.php';

