function openmodCatPopup(id, title, description) {
    // Set values in the update category form
    document.getElementById('modTitle').value = title;
    document.getElementById('modDescription').value = description;
    document.getElementById('modCategoryId').value = id;

    // Show the update category popup
    document.getElementById('modCatPopup').classList.remove('hidden');
}
function closemodCatPopup() {
    document.getElementById('modCatPopup').classList.add('hidden');
}
function opencatPopup() {
  
    document.getElementById('catPopup').classList.remove('hidden');
}

function closecatPopup() {
    
    document.getElementById('catPopup').classList.add('hidden');
}
function openTagUpdatePopup(id, title) {
    document.getElementById('updateTagTitle').value = title;
    document.getElementById('updateTagId').value = id;

    document.getElementById('tagUpdatePopup').classList.remove('hidden');
}

function closeTagUpdatePopup() {
    document.getElementById('tagUpdatePopup').classList.add('hidden');
}
function openAddTagPopup() {
    // Show the add tag popup
    document.getElementById('addTagPopup').classList.remove('hidden');
}

function closeAddTagPopup() {
    // Hide the add tag popup
    document.getElementById('addTagPopup').classList.add('hidden');
}

    function validateWikiForm() {
    
        var titleInput = document.getElementById('title');
        if (titleInput.value.trim() === '') {
            alert('Please enter a title.');
            return false;
        }

        var contentInput = document.getElementById('content');
        if (contentInput.value.trim() === '') {
            alert('Please enter content.');
            return false;
        }

        var categoryInput = document.getElementById('category');
        if (categoryInput.value === '') {
            alert('Please pick a category.');
            return false;
        }


        var tagInputs = document.querySelectorAll('input[name="tag[]"]:checked');
        if (tagInputs.length === 0) {
            alert('Please select at least one tag.');
            return false;
        }



        return true; 
    }


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



