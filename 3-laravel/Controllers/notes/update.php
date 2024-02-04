<?php

$heading = "Updating notes";

require  base_path("Core/Validator.php");

$config = require base_path('config.php');
$db = new Database($config['database']);

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $errors = [] ;

    $validator = new Validator();

    if ($validator->isStringEmpty($_POST["body"]))
    {
        $errors ['body'] = "Body is required";
    }

    if ($validator->isStringEmpty($_POST["title"]))
    {
        $errors ['title'] = "title is required";
    }

    var_dump($errors);
    die();

    if (empty($errors))
    {
        $query = $db->query('UPDATE notes SET title : $_POST["title"], body : $_POST["body"] WHERE id = $_GET["id"]');
    }

    view("/notes/index.view.php",[
        'heading' => "Notes",
        "query" => $db -> query('SELECT * FROM notes where user_id = 1')->get(),
    ]);

}

//dd($errors);

view("/notes/update.view.php", isset($errors)?
    ['heading' => 'Updating note', 'errors' => $errors] :
    ['heading' => 'Updating note',] );