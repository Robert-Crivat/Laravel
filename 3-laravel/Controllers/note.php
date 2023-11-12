<?php
$heading = "note";

$config = require 'config.php';
$db = new Database($config['database']);
$query = $db->query("SELECT * FROM notes WHERE id = {$_GET['id']}");


$note = [
    'id' => $query[0]['id'],
    'title' => $query[0]['title'],
    'body' => $query[0]['body'],
    'user_id' => $query[0]['user_id'],
];

if (! $note)
{
    abort();
}

if ($note['user_id'] != 1)
{
    abort(403);
}

require "views/note.view.php";