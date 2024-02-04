<?php require base_path("views/Partials/head.php"); ?>
<?php require base_path("views/Partials/nav.php"); ?>
<?php require base_path("views/Partials/banner.php"); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <a href="/notes/create"><button type="submit" class="btn btn-primary:hover">Create new note</button></a>
        <?php foreach ($query as $note):?>
        <p>
        <li>
            <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover : underLine"> <?=$note['title']; ?> </a>
        </li>
        </p>

        <?php endforeach ; ?>
    </div>
</main>

<?php require base_path("views/Partials/footer.php"); ?>