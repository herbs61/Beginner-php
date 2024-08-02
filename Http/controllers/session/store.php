<?php

use Core\App;
use Core\Authenticator;
use Http\Form\LoginForm;

// log in the user if the credentials match



$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();


if ($form->validate($email, $password)){
    $auth = new Authenticator();

if ($auth->attempt($email, $password)){
    redirect('/');
    }else{
        $form->error('email', 'No matching account found for that email address and password.');
    }
          
}   

return view('session/create.view.php', [
    'errors'=> $form->errors()
]);
   

//  return view('session/create.view.php', [
//         'errors'=> [
//         'email' => 'No matching account found for that email address and password.'
//         ]
//     ]);



// match credentials

// // we have a user, but we don't kow if the password matches what we have in the database





