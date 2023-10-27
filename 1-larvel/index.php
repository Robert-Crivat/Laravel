<?php
    $books = [
        [
            "name" => "Do androids dream of electric sheep",
            "author" => "Philip K. Dick",
            "releasaeYear" => 1968,
            "purchaseUrl" => 'http://example.com'
        ],

        [
            "name" => "the langoliers",
            "author" => "andy weir",
            "releasaeYear" => 2021,
            "purchaseUrl" => 'http://example.com'
        ],

        [
            "name" => "the martian",
            "author" => "andy weir",
            "releasaeYear" => 2011,
            "purchaseUrl" => 'http://example.com'
        ],
    ];

    function filter($items, $fn)
    {

        $filteredItems = [];
        foreach ($items as $item) {
            if ($fn($item)) {
                $filteredItems[] = $item;
            }
        }
        return $filteredItems;
    };

    $filteredBooks = array_filter($books, function ($book) {
        return $book["releasaeYear"] <= 1968;
    });

    require "index.view.php";