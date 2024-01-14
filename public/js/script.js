
function handleEnterKey(event) {
    if (event.key === "Enter") {
        event.preventDefault();
        searchAndDisplay();
    }
}

function displayResults(dataArray) {
var container = document.getElementById('searchResults');
container.innerHTML = '';

dataArray.forEach(function(data) {
    var url = '<?php echo URLROOT; ?>/wikis/wikiDetails/' + data.id;
    var resultItem = document.createElement('div');
    resultItem.classList = 'mb-6';

    // Date formatting
    var date = new Date(data.created_at);
    var formattedDate = date.toLocaleDateString('en-US', {
        year: 'numeric',
        month: 'long',
        day: 'numeric',
    });

    resultItem.innerHTML = `
        <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
            <div class="flex items-center justify-between">
                <span class="font-light text-gray-600">${formattedDate}</span>
                <a href="#" class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">${data.category !== null ? data.category : 'Category Not Assigned'}</a>
            </div>
            <div class="mt-2">
                <a href="#" class="text-2xl font-bold text-gray-700 hover:underline">${data.title}</a>
                <p class="mt-2 text-gray-600">${data.content}</p>
            </div>
            <div class="flex items-center justify-between mt-4">
                <a href="${url}" class="text-blue-500 hover:underline">Read more</a>
                <div class="flex items-center">
                    <div class="relative flex-shrink-0">
                        <!-- Placeholder avatar with purple background and initials -->
                        <div class="w-10 h-10 mx-4 rounded-full bg-purple-400/50 flex items-center justify-center">
                            <span class="text-purple-800 font-bold">${data.fname.charAt(0)}${data.lname.charAt(0)}</span>
                        </div>
                    </div>
                    <h1 class="font-bold text-gray-700 hover:underline">By ${data.fname} ${data.lname}</h1>
                </div>
            </div>
        </div>
    `;

    container.appendChild(resultItem);
});
}


function searchAndDisplay() {
    var searchTerm = document.getElementById('searchInput').value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var data = JSON.parse(xhr.responseText);
            displayResults(data);
        }
    };
    xhr.open('GET', '<?php echo URLROOT; ?>/wikis/searchData/' + searchTerm, true);
    xhr.send();
}
