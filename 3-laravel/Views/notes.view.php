<?php require "Partials/head.php"; ?>
<?php require "Partials/nav.php"; ?>
<?php require "Partials/banner.php" ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <a href="/notes/create"><button type="submit" class="btn btn-primary:hover">Create new note</button></a>
        <?php foreach ($query as $note):?>
        <li>
            <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover : underLine"> <?= $note["id"] . " - " . $note['title']; ?> </a>
        </li>
        <?php endforeach ; ?>
    </div>
</main>

<?php require "Partials/footer.php"; ?>