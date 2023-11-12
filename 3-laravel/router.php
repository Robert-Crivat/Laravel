<?php
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    $routs = [
        '/' => 'controllers/index.php',
        '/about' => 'controllers/about.php',
        '/contact' => 'controllers/contact.php',
        '/notes' => 'controllers/notes.php',
        '/note' => 'controllers/note.php',
    ];

    function routeToController($uri, $routs)
    {
        if (array_key_exists($uri, $routs)) {
            require $routs[$uri];
        } else {
            abort();
        }
    }

    function abort($code = 404)
    {
        http_response_code($code);
        require "controllers/{$code}.php";
        die();
    }

    routeToController($uri, $routs);
