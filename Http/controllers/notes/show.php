<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$notes = $db->query('select * from notes where user_id = 1')->get();


$currentUserId = 1;


$note = $db->query('select * from notes where id = :id',
    [
       'id' => $_GET['id']
       ])->findOrFail();

       authorize($note['user_id'] === $currentUserId);
   
view ("notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note
    
]);