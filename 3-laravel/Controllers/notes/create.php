<?php

$heading = "Create notes";

    require  base_path("Validator.php");

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

        if (empty($errors))
        {
            $query = $db->query('INSERT into notes (title, body, user_id)  VALUES (:title,:body,:user_id)',
                [
                    'title' => $_POST['title'],
                    'body' => $_POST['body'],
                    'user_id' => 1
                ]
            );
        }
    }

    //dd($errors);

 view("/notes/create.view.php", isset($errors)?
     ['heading' => 'Creation note', 'errors' => $errors] :
     ['heading' => 'Creation note',] );