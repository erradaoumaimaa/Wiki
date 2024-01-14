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
