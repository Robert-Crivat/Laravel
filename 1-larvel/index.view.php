<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>demo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <h1>Recommended Books</h1>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book["purchaseUrl"] ?>">
                    <?= $book["name"] ?> (<?= $book["releasaeYear"] ?>) - By <?= $book["author"] ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>

</body>

</html>