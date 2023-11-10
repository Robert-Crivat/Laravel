<?php require "Partials/head.php"; ?>
<?php require "Partials/nav.php"; ?>
<?php require "Partials/banner.php" ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-6""><a href="/notes" class="text-blue-500 underline mb-6">Go back</a></p>
        <p><?= "title : " . $note['id']." - ".$note['title']?></p>
        <p><?= "body : " .$note['body']  ?> </p>
    </div>
</main>

<?php require "Partials/footer.php"; ?>