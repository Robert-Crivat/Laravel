<?php

    require 'Validator.php';

    $heading = "Create note";

    $config = require 'config.php';
    $db = new Database($config['database']);

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $errors = [] ;

        $validator = new Validator();

        if ($validator->isStringEmpty($_POST["body"]))
        {
            $errors ['body'] = "Body is required";
        }

        if(strlen($_POST['body']) > 1000)
        {
            $errors ['body'] = "Body can be over 1000";
        }

        if (strlen($_POST['title']) == 0)
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

    require "Views/note-create.view.php";