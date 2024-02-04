<?php require base_path("views/Partials/head.php"); ?>
<?php require base_path("views/Partials/nav.php"); ?>
<?php require base_path("views/Partials/banner.php"); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="flex-direction : row w-100">
            <p class="mb-6 mr-80 "><a href="/notes" class="text-blue-500 underline mb-6">Go back</a></p>
            <form class="ml-80" method = "post">
                <input type="hidden" name="id" value="<?= $note['title'] ?>">
                <button class = "text-sm text-red-500" ="submit">Delete</button>

            </form>
            <a href="/noteupdate?id=<?= $note['id'] ?>" class="text-sm text-blue-500 ml-10" ="submit" value = "<?= $note['title'] ?>">Update</a>
        </div>
        <p class="h1"><?= $note['title']?></p>
        <p><?= "body : " .$note['body']  ?> </p>
    </div>

    
    
</main>

<?php require base_path("views/Partials/footer.php"); ?>