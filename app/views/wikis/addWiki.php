<?php
require_once APPROOT . "/views/include/header.php";
?>


<body class="bg-gradient-to-r from-blue-300 to-purple-500 h-screen flex justify-center items-center">
    
    <div class="py-8 px-6 max-w-md bg-white bg-opacity-30 rounded-lg shadow-lg backdrop-blur-xl backdrop-filter">
    <a href="<?= URLROOT . '/users/dashboard/' ?>" class="back text-gray-600 hover:text-gray-800 ml-4 mt-4">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>
        <h1 class="text-3xl font-extrabold text-center text-gray-800 mb-5">Add Wiki</h1>

        <form action="<?php echo URLROOT; ?>/wikis/insertData" method="post" class="flex flex-col" name="wikiForm">
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
                <button  type="reset" class="bg-gray-500 text-white font-semibold py-2 rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out mb-4 ml-20 glass-btn">Cancel</button>
                <button type="submit" name="sendF" class="bg-gradient-to-r from-purple-400 to-indigo-500 text-white font-semibold py-2 rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out mb-4 glass-btn">Submit</button>
            </div>
        </form>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        function validateWikiForm() {
            // Example: Check if the title is not empty and matches the regex pattern
            var titleInput = document.getElementById('title');
            var titlePattern = /^[a-zA-Z0-9\s_]+$/; // Alphanumeric characters, spaces, and underscores
            if (titleInput.value.trim() === '' || !titlePattern.test(titleInput.value)) {
                alert('Please enter a valid title.');
                return false;
            }

            // Example: Check if the content matches the regex pattern (optional)
            var contentInput = document.getElementById('content');
            var contentPattern = /^[a-zA-Z0-9\s]+$/; // Alphanumeric characters and spaces
            if (contentInput.value.trim() !== '' && !contentPattern.test(contentInput.value)) {
                alert('Please enter valid content.');
                return false;
            }

            // Example: Check if a category is selected
            var categoryInput = document.getElementById('category');
            if (categoryInput.value === '') {
                alert('Please pick a category.');
                return false;
            }

            // Example: Check if at least one tag is selected
            var tagInputs = document.querySelectorAll('input[name="tag[]"]:checked');
            if (tagInputs.length === 0) {
                alert('Please select at least one tag.');
                return false;
            }

            // Add more validation checks as needed

            return true; // Form will be submitted if all checks pass
        }

        // Optional: You can attach the validateWikiForm function to the form's onsubmit event
        var wikiForm = document.querySelector('form[name="wikiForm"]');
        if (wikiForm) {
            wikiForm.onsubmit = function () {
                return validateWikiForm();
            };
        }
    });
</script>


</body>