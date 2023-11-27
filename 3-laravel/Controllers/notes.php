<?php

$heading = "Notes";

$config = require "config.php";
$db = new Database($config['database']);
$query = $db -> query('SELECT * FROM notes where user_id = 1')->get();

//dd($query);


require "views/notes.view.php";