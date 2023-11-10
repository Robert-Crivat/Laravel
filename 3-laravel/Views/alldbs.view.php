<?php require "Partials/head.php"; ?>
<?php require "Partials/nav.php"; ?>
<?php require "Partials/banner.php" ?>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

            <?php foreach ($customrequests as $richiesta) : ?>
                <li>
                    <?= $richiesta['id'] . " " . $richiesta['title'] ." - ". $richiesta['body']?>
                </li>
            <?php endforeach ; ?>
        </div>
    </main>

<?php require "Partials/footer.php"; ?>