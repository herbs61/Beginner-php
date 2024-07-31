<?php 

use Core\Validator;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$notes = $db->query('select * from notes where user_id = 1')->get();
$errors = [];  



if(! Validator::string($_POST['body'], 1, 1000)){
        $errors['body'] = 'A body of no more than 1,000 charaters is required';
    }

if (! empty($errors))
{
    //Validation errors
    return view ("notes/create.view.php", [
        'heading' => 'Create Note',
        'erros' => $errors
        
    ]);
} 

    if(empty($errors)){
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)',[
            'body' => $_POST['body'],
            'user_id' => 1
        ]);

        header('location: /notes');
        die();
    }


