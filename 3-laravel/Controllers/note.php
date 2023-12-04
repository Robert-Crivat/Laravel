<?php
$heading = "note";
$currentUserId = 1;

$config = require 'config.php';
$db = new Database($config['database']);
$query = $db->qb("SELECT * FROM notes WHERE id = {$_GET['id']}")->FindORFail();

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

if ($note['user_id'] != $currentUserId)
{
    abort(Response::FORBIDDEN);
}

require "views/note.view.php";