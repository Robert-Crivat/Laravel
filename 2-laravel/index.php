<?php

require "functions.php";

//require "router.php";

$dsn= 'mysql:host=127.0.0.1; dbname=Myapp; port = 3306;';
$db_user = 'root';
$db_pass = NULL;

$pdo = new PDO($dsn, $db_user, $db_pass);

$statement = $pdo->prepare("SELECT * from posts");
$statement->execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($Posts as $post) {
    echo "<li>". $post['title'] . "</li>";
}