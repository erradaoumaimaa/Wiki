<?php
require_once APPROOT . "/views/include/header.php";
?>
<div class="bg-gradient-to-r from-blue-300 to-purple-500 h-screen flex justify-center items-center">
    <div class="py-8 px-6 max-w-md bg-white bg-opacity-30 rounded-lg shadow-lg backdrop-blur-xl backdrop-filter">
        <h1 class="text-3xl font-extrabold text-center text-gray-800 mb-5">Add Wiki</h1>

        <form action="<?php echo URLROOT; ?>/wikis/insertData" method="post" class="flex flex-col">
            <div class="mb-5">
                <label class="text-gray-700 font-semibold mb-2" for="title">Title</label>
                <input class="bg-transparent border rounded-lg shadow border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 py-2 px-4 block w-full appearance-none leading-normal glass-input" type="text" id="title" name="title" required placeholder="Enter Title">
            </div>
            <div class="mb-5">
                <label class="text-gray-700 font-semibold mb-2" for="content">Content</label>
                <textarea class="bg-transparent border rounded-lg shadow border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 py-2 px-4 block w-full appearance-none leading-normal glass-input" id="content" name="content" rows="5" required placeholder="Write a creative content <3" style="resize: none;"></textarea>
            </div>
            <div class="mb-5">
                <label class="text-gray-700 font-semibold mb-2" for="category">Category</label>
                <select class="bg-transparent border rounded-lg shadow border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 py-2 px-4 block w-full appearance-none leading-normal glass-input" name="category" id="category" required>
                    <option value="" hidden>Pick a Category</option>
                    <?php
                    foreach ($data['categories'] as $cat) {
                        echo '<option value="' . $cat->id . '">' . $cat->title . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="mb-5">
                <label class="text-gray-700 font-semibold mb-2" for="tags">Tags</label>
                <div class="addTags">
                    <?php
                    foreach ($data['tags'] as $tag) {
                        echo '<label class="tag" for="' . $tag->id . '"><input type="checkbox" name="tag[]" id="' . $tag->id . '" value="'. $tag->id.'">' . $tag->title . '</label>';
                    }
                    ?>
                </div>
            </div>
            <div class="btns space-x-40">
                <button type="reset" class="bg-gray-500 text-white font-semibold py-2 rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out mb-4 ml-20 glass-btn">Cancel</button>
                <button type="submit" name="sendF" class="bg-gradient-to-r from-purple-400 to-indigo-500 text-white font-semibold py-2 rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out mb-4 glass-btn">Submit</button>
            </div>
        </form>
    </div>
</div>
