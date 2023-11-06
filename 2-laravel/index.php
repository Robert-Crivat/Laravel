<?php

require "functions.php";

//require "router.php";

$dsn= 'mysql:host=127.0.0.1; dbname=Myapp; port = 3306;';
$db_user = 'root';

$pdo = new PDO($dsn, $db_user,);

$statement = $pdo->prepare("SELECT * from posts");
$statement->execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>". $post['title'] . "</li>";
}