<?php


use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);
$notes = $db->query('select * from notes where user_id = 1')->get();


$currentUserId = 1;


// find the corresponding note
$note = $db->query('select * from notes where id = :id',
    [
       'id' => $_POST['id']
       ])->findOrFail();


//  authorize that the curretn user can edit the note

       authorize($note['user_id'] === $currentUserId);

// validate the form
$errors = [];

if(! Validator::string($_POST['body'], 10)){
    $errors['body'] = 'A body of no more than 1,000 charaters is required';
}


// if no validation errors, update the record 
if (count($errors)){
    return view('notes/edit.view.php', [
        'heading' => 'Edit Note',
        'errors'=> $errors,
        'note' => $note
    ]);
}

$db->query('update notes set body = :body where id = :id',[
    'id'=> $_POST['id'],
    'body' => $_POST['body']
]);

// redirect the user
header('location: /notes');
die();