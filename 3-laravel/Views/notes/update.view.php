<?php require base_path("views/Partials/head.php"); ?>
<?php require base_path("views/Partials/nav.php"); ?>
<?php require base_path("views/Partials/banner.php") ?>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <form method = "POST">
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-4">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                        <textarea rows = "1" name="title" id="title"  class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"><?= isset($_POST["title"]) ? $_POST["title"] : ''?></textarea>
                                    </div>
                                    <?php if (isset($errors['title'])) : ?>
                                        <p class="text-red-500 mt-2"><?= $errors["title"] ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Body of note</label>
                                <div class="mt-2">
                                    <textarea id="body" name="body"  rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><?= isset($_POST["body"]) ?$_POST["body"]:''?></textarea>
                                </div>
                                <?php if (isset($errors['body'])) : ?>
                                    <p class="text-red-500 mt-2"><?= $errors['body'] ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                        </div>
            </form>
        </div>
    </main>

<?php require base_path("views/Partials/footer.php"); ?>