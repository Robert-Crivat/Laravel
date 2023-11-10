<?php
$heading = "note";

$config = require 'config.php';
$db = new Database($config['database']);
$query = $db->query("SELECT id,title,body FROM notes WHERE id = {$_GET['id']}");

$note = [
    'id' => $query[0]['id'],
    'title' => $query[0]['title'],
    'body' => $query[0]['body'],
];

require "views/note.view.php";