<?php

$heading = "notes";
$currentUserId = 1;

$note = [];
$config = require base_path('config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $query = $db->query("SELECT * FROM notes WHERE id = {$_GET['id']}");
    $db->query('delete from notes where id = :id', ['id' => $_GET['id']]);

    view("/notes/index.view.php",[
        'heading' => "Notes",
        "query" => $db -> query('SELECT * FROM notes where user_id = 1')->get(),
    ]);
} else {
    $query = $db->query("SELECT * FROM notes WHERE id = {$_GET['id']}")->FindORFail();

//    dd(Response::FORBIDDEN);

    if ($query['user_id'] != $currentUserId) {
        abort();
    }

    view("/notes/show.view.php", [
        'heading' => 'note',
        'note' => $query
    ]);
}