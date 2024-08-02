<?php

use Core\Authenticator;
// log the user out
$authenticator = new Authenticator();
$authenticator->logout();



header('location: /');
exit();
