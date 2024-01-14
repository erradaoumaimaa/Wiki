<?php
require_once APPROOT . "/views/include/header.php";
require APPROOT . "/views/include/admin_nav.php";
?>

<body class="overflow-hidden">
<div class="h-screen w-screen p-10">
    <div class="text-center mb-10 flex items-center justify-between">
        <div>
            <h2 class="text-4xl tracking-tight font-bold text-primary-800 mt-16 inline-block">All Tags :</h2>
        </div>

        <!-- Add Category Button -->
        <button onclick="openAddTagPopup()" class="cursor-pointer text-green-600 bg-green-100 px-4 py-2 rounded-md">
            Add Tag
        </button>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <?php foreach ($data['tags'] as $tag) : ?>
            <div class="relative rounded-lg p-4 bg-black/5 border-2 border-solid border-black/5 transition-all hover:bg-black/10 flex flex-col items-stretch justify-start gap-2">
                <div class="flex justify-between items-center">
                    <h2 class="font-mono font-bold text-lg"><?= $tag->title ?></h2>
                    <div class="flex gap-2">
                        <!-- Update button -->
                        <button onclick="openTagUpdatePopup(<?php echo $tag->id; ?>, '<?php echo $tag->title; ?>')" class="text-blue-900 hover:text-blue-700" title="Update">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </button>

                        <!-- Remove button -->
                        <button onclick="window.location.href='<?php echo URLROOT; ?>/tags/deleteOne/<?php echo $tag->id ; ?>'" class="text-red-500 hover:text-red-700" title="Remove">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <span>Total Wikis : <?= ' ' . $tag->Total_Wikis ?></span>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- Add Tag Form Popup -->
<div id="addTagPopup" class="fixed inset-0 z-50 hidden overflow-hidden bg-black/50">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white w-full max-w-md p-6 rounded-md shadow-lg">
            <h2 class="text-2xl font-bold mb-4">Add Tag</h2>
            <form action="<?php echo URLROOT; ?>/tags/addOne" method="post">
                <label for="addTagTitle" class="block text-sm font-medium text-gray-700">Tag Title:</label>
                <input type="text" id="addTagTitle" name="addTagTitle" required class="mt-1 p-2 border rounded-md w-full" placeholder="Enter Tag Name">

                <div class="mt-6">
                    <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-700">Submit</button>
                </div>
            </form>

            <button onclick="closeAddTagPopup()" class="mt-4 text-blue-500 hover:underline cursor-pointer">Cancel</button>
        </div>
    </div>
</div>
<!-- Update Tag Form Popup -->
<div id="tagUpdatePopup" class="fixed inset-0 z-50 hidden overflow-hidden bg-black/50">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white w-full max-w-md p-6 rounded-md shadow-lg">
            <h2 class="text-2xl font-bold mb-4">Update Tag</h2>
            <form action="<?php echo URLROOT; ?>/tags/modifyOne" method="post">
                <label for="updateTagTitle" class="block text-sm font-medium text-gray-700">Tag Title:</label>
                <input type="text" id="updateTagTitle" name="updateTagTitle" required class="mt-1 p-2 border rounded-md w-full" placeholder="Enter Tag Name">

                <input type="hidden" id="updateTagId" name="id" readonly>

                <div class="mt-6">
                    <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-700">Submit</button>
                </div>
            </form>

            <button onclick="closeTagUpdatePopup()" class="mt-4 text-blue-500 hover:underline cursor-pointer">Cancel</button>
        </div>
    </div>
</div>

</body>
</html>
