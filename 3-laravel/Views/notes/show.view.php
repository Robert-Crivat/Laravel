<?php require base_path("views/Partials/head.php"); ?>
<?php require base_path("views/Partials/nav.php"); ?>
<?php require base_path("views/Partials/banner.php"); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-6""><a href="/notes" class="text-blue-500 underline mb-6">Go back</a></p>
        <p class="h1"><?= $note['title']?></p>
        <p><?= "body : " .$note['body']  ?> </p>
        <p><?= $note['user_id'] ?></p>
    </div>
</main>

<?php require base_path("views/Partials/footer.php"); ?>