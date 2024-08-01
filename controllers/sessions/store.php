<?php

use Core\App;
use Core\Database;
use Core\Validator;

// log in the user if the credentials match

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];


$errors = [];
if (!Validator::email($email)){
    $errors['email'] = 'Please provide a valid email address.';
}

if(!Validator::string($password)){
    $errors['password'] = 'Please provide a valid password.';
}

if(! empty($errors)){
    return view('sessions/create.view.php', [
        'errors'=> $errors
    ]);
}

// match credentials
$db->query('select * from users where email = :email', [
    'email'=> $email
])->find();

dd($user);


login([
    'email' => $email
]);