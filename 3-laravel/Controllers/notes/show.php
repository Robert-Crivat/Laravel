<?php

$heading = "notes";
$currentUserId = 1;

$note = [];
$config = require base_path( 'config.php');
$db = new Database($config['database']);
$query = $db->query("SELECT * FROM notes WHERE id = {$_GET['id']}")-> FindORFail();

if ($query['user_id'] != $currentUserId)
{
    abort(Response::FORBIDDEN);
}

view("/notes/show.view.php", [
    'heading' => 'note',
    'note' => $query
]);