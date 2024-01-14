<?php
require_once APPROOT . "/views/include/header.php";
require APPROOT . "/views/include/admin_nav.php";
?>

<body class="overflow-hidden">
<div class="h-screen w-screen p-10">
    <div class="text-center mb-10 flex items-center justify-between">
        <div>
            <h2 class="text-4xl tracking-tight font-bold text-primary-800 mt-16 inline-block">All Categories :</h2>
        </div>

        <!-- Add Category Button -->
        <button onclick="opencatPopup()" class="cursor-pointer text-green-600 bg-green-100 px-4 py-2 rounded-md">
            Add Category
        </button>
    </div>

    <!-- Grid of Categories -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <?php foreach ($data['categories'] as $category) : ?>
            <!-- Category Card -->
            <div class="relative rounded-lg p-4 bg-black/5 border-2 border-solid border-black/5 transition-all hover:bg-black/10 flex flex-col items-stretch justify-start gap-2">
                <div class="flex justify-between items-center">
                    <h2 class="font-mono font-bold text-lg"><?= $category->title ?></h2>
                    <div class="flex gap-2">
                        <!-- Update button -->
                        <button onclick="openmodCatPopup(<?php echo $category->id; ?>, '<?php echo $category->title; ?>', '<?php echo $category->description; ?>')" class="text-blue-900 hover:text-blue-700" title="Update">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejun="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </button>

                        <!-- Remove button -->
                        <button onclick="window.location.href='<?php echo URLROOT; ?>/categories/deleteOne/<?php echo $category->id ; ?>'" class="text-red-500 hover:text-red-700" title="Remove">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <p class="text-xs"><?= $category->description ?></p>
                <span>Total Wikis : <?= ' ' . $category->Total_Wikis ?></span>
                <span>Archived Wikis :<?= ' ' . $category->Archived_Count ?></span>
            </div>
        <?php endforeach; ?>
    </div>

<!-- Add Category Form Popup -->
<div id="catPopup" class="fixed inset-0 z-50 hidden overflow-hidden bg-black/50">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white w-full max-w-md p-6 rounded-md shadow-lg">
            <h2 class="text-2xl font-bold mb-4">Add Category</h2>
            <form action="<?php echo URLROOT; ?>/categories/addOne" method="post">
                <label for="title" class="block text-sm font-medium text-gray-700">Category Title:</label>
                <input type="text" id="title" name="title" required class="mt-1 p-2 border rounded-md w-full" placeholder="Enter Category Name">

                <label for="description" class="block text-sm font-medium text-gray-700 mt-4">Category Description:</label>
                <textarea id="description" name="description" required class="mt-1 p-2 border rounded-md w-full" placeholder="Tell us about your category"></textarea>

                <div class="mt-6">
                    <button type="submit" class="w-full bg-green-500 text-white p-2 rounded-md hover:bg-green-700">Submit</button>
                </div>
            </form>

            <button onclick="closecatPopup()" class="mt-4 text-green-500 hover:underline cursor-pointer">Cancel</button>
        </div>
    </div>
</div>
    <!-- Update Category Form Popup -->
<div id="modCatPopup" class="fixed inset-0 z-50 hidden overflow-hidden bg-black/50">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white w-full max-w-md p-6 rounded-md shadow-lg">
            <h2 class="text-2xl font-bold mb-4">Modify Category</h2>
            <form action="<?php echo URLROOT; ?>/categories/modifyOne" method="post">
                <label for="modTitle" class="block text-sm font-medium text-gray-700">Category Title:</label>
                <input type="text" id="modTitle" name="modTitle" required class="mt-1 p-2 border rounded-md w-full" placeholder="Enter Category Name">

                <label for="modDescription" class="block text-sm font-medium text-gray-700 mt-4">Category Description:</label>
                <textarea id="modDescription" name="modDescription" required class="mt-1 p-2 border rounded-md w-full" placeholder="Tell us about your category"></textarea>

                <input type="hidden" id="modCategoryId" name="id" readonly>

                <div class="mt-6">
                    <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-700">Submit</button>
                </div>
            </form>

            <button onclick="closemodCatPopup()" class="mt-4 text-blue-500 hover:underline cursor-pointer">Cancel</button>
        </div>
    </div>
</div>

<script>

</script>
</body>
</html>
