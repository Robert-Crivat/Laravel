<?php

$heading = "Notes";

$id = (int)$_GET['id'];

$config = require "config.php";
$db = new Database($config['database']);
$notes = $db -> query('SELECT * from notes'); //-> fetchAll();
$customrequests = $db -> query('SELECT * from notes where id = :id', [id => $_GET['id']]);

dd($customrequests);
require "views/alldbs.view.php";