<?php
require_once APPROOT . "/views/include/header.php";
?>

<body class="bg-gradient-to-r from-blue-300 to-purple-500 h-screen flex justify-center items-center">

    <div class="py-8 px-6 max-w-md bg-white bg-opacity-30 rounded-lg shadow-lg backdrop-blur-xl backdrop-filter">
    <a href="<?= URLROOT . '/users/dashboard/' ?>" class="back text-gray-600 hover:text-gray-800 ml-4 mt-4">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>
        <h1 class="text-3xl font-extrabold text-center text-gray-800 mb-5">Modify Wiki </h1>

        <form action="<?php echo URLROOT; ?>/wikis/modifyData/<?php echo $data['wiki']->id; ?>" method="post" class="flex flex-col">
            <div class="mb-5">
                <label class="text-gray-700 font-semibold mb-2" for="title">Title</label>
                <input class="bg-transparent border rounded-lg shadow border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 py-2 px-4 block w-full appearance-none leading-normal" type="text" id="title" name="title" required value="<?php echo $data['wiki']->title; ?>">
            </div>
            <div class="mb-5">
                <label class="text-gray-700 font-semibold mb-2" for="content">Content</label>
                <textarea class="bg-transparent border rounded-lg shadow border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 py-2 px-4 block w-full appearance-none leading-normal" id="content" name="content" rows="5" required style="resize: none;"><?php echo $data['wiki']->content; ?></textarea>
            </div>
            <div class="mb-5">
                <label class="text-gray-700 font-semibold mb-2" for="category">Category</label>
                <select class="bg-transparent border rounded-lg shadow border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 py-2 px-4 block w-full appearance-none leading-normal" name="category" id="category" required>
                    <option value="" hidden>Pick a Category</option>
                    <?php
                    foreach ($data['categories'] as $cat) {
                        $selected = ($cat->id == $data['wiki']->category_id) ? 'selected' : '';
                        echo '<option value="' . $cat->id . '" ' . $selected . '>' . $cat->title . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="mb-5">
                <label class="text-gray-700 font-semibold mb-2" for="tags">Tags</label>
                <div class="addTags">
                    <?php
                    foreach ($data['tagsWiki'] as $tag) {
                        echo '<label class="tag" for="' . $tag->id . '"><input type="checkbox" name="tag[]" id="' . $tag->id . '" value="' . $tag->id . '" checked>' . $tag->title . '</label>';
                    }
                    foreach ($data['tags'] as $tag) {
                        echo '<label class="tag" for="' . $tag->id . '"><input type="checkbox" name="tag[]" id="' . $tag->id . '" value="' . $tag->id . '">' . $tag->title . '</label>';
                    }
                    ?>
                </div>
            </div>
            <div class="btns space-x-40">
    <button type="reset" class="bg-gray-500 text-white font-semibold py-2 rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out mb-4 ml-20">Cancel</button>
    <button type="submit" name="sendF" class="bg-gradient-to-r from-purple-400 to-indigo-500 text-white font-semibold py-2 rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out mb-4">Submit</button>
</div>


        </form>
    </div>
</body>

</html>