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
            <!---
            
                <form action="mt-6" method="post">
                    <input type="hidden" name="id" value="<?= $note['id']?>">
                    <button type="submit" class=" text-sm text-red-500">Delete</button>
                </form>
            --->
            
        </li>
        </p>

        <?php endforeach ; ?>
    </div>
</main>

<?php require base_path("views/Partials/footer.php"); ?>