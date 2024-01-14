<?php
require_once APPROOT . "/views/include/header.php";
?>

<body class="font-sans bg-white">
    <?php
    require_once APPROOT . "/views/include/auteur_nav.php";
    ?>
    <div class="dark:bg-gray-800">
        <div class="dark:bg-transparent">
            <div class="mx-auto flex flex-col items-center py-12 sm:py-24">
                <div class="w-11/12 sm:w-2/3 lg:flex justify-center items-center flex-col mb-5 sm:mb-10">
                    <h1 class="text-4xl sm:text-5xl md:text-5xl lg:text-5xl xl:text-6xl text-center text-gray-800 dark:text-white font-black leading-10">
                        Welcome <?php echo $data['user']->fname . ' ' . $data['user']->lname . '!'; ?>
                        <span class="text-violet-800 dark:text-violet-500">👋 It's time to be creative!</span>
                    </h1>

                    <p class="mt-5 sm:mt-10 lg:w-10/12 text-gray-600 dark:text-gray-300 font-normal text-center text-xl">
                        In the tapestry of articles, words become art, and sentences paint stories. Let your ideas flow and create a masterpiece that captivates minds and sparks inspiration
                    </p>
                </div>
                <div class="flex w-11/12 md:w-8/12 xl:w-6/12">
                <div class="flex rounded-md w-full">
                        <input type="text" name="searchInput" id="searchInput"
                            class="w-full p-3 rounded-md rounded-r-none border border-2 border-gray-300 placeholder-current dark:bg-gray-500  dark:text-gray-300 dark:border-none "
                            placeholder="keyword" onkeydown="handleEnterKey(event)" />
                            <button class="inline-flex items-center gap-2 bg-violet-700 text-white text-lg font-semibold py-3 px-6 rounded-r-md" onclick="searchAndDisplay()">
                            <span>Find</span>
                            <svg class="text-gray-200 h-5 w-5 p-0 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve">
                                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-6" id="searchResults">
                        <!-- Résultats de recherche AJAX seront affichés ici -->
                    </div>
    <!-- Main Content -->
    <div class="px-6 py-8">
        <div class="container flex flex-col mx-auto lg:flex-row">
            <!-- Latest Wikis Section -->
            <div class="w-full lg:w-8/12 lg:pr-8">
                <div class="max-w-7xl mx-auto my-8 px-2">
                    <div class="flex justify-center text-2xl md:text-3xl font-bold">
                        Latest Wikis
                    </div>
                    <div class="mt-6">
                        <?php foreach ($data['wikis'] as $wiki) : ?>
                            <!-- Wiki Card -->
                            <div class="mb-8">
                                <?php
                                $date = new DateTime($wiki->created_at);
                                ?>
                                <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                                    <div class="flex items-center justify-between">
                                        <span class="font-light text-gray-600"><?= $date->format('M d, Y') ?></span>
                                        <a href="#"
                                            class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500"><?= $wiki->category !== null ? $wiki->category : 'Category Not Assigned' ?></a>
                                    </div>
                                    <div class="mt-2">
                                        <a href="#"
                                            class="text-2xl font-bold text-gray-700 hover:underline"><?= $wiki->title ?></a>
                                        <p class="mt-2 text-gray-600"><?= $wiki->content ?></p>
                                    </div>
                                    <div class="flex items-center justify-between mt-4">
                                        <a href="<?php echo URLROOT; ?>/wikis/wikiDetails/<?php echo $wiki->id; ?>"
                                            class="text-blue-500 hover:underline">Read more</a>
                                        <?php if ($_SESSION['user_id'] == $wiki->user_id) : ?>
                                            <div class="mt-4 flex items-center space-x-4">
                                                <a href="<?php echo URLROOT; ?>/wikis/updateForm/<?php echo $wiki->id; ?>"
                                                    class="text-blue-500 hover:underline">
                                                    <button>
                                                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" fill="none" viewBox="0 0 24 24"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                        </svg>
                                                    </button>
                                                </a>
                                                <a href="<?php echo URLROOT; ?>/wikis/deleteOne/<?php echo $wiki->id; ?>"
                                                    class="text-red-500 hover:underline">
                                                    <button>
                                                        <svg class="text-red-600 w-6 h-6"
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <polyline points="3 6 5 6 21 6" />
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                                                            <line x1="10" y1="11" x2="10" y2="17" />
                                                            <line x1="14" y1="11" x2="14" y2="17" />
                                                        </svg>
                                                    </button>
                                                </a>
                                            </div>
                                        <?php else : ?>
                                            <div>
                                                <a href="#" class="flex items-center">
                                                    <?php
                                                    $initials = strtoupper(substr($wiki->fname, 0, 1) . substr($wiki->lname, 0, 1));
                                                    ?>
                                                    <div class="relative flex-shrink-0">
                                                        <div class="w-10 h-10 mx-4 rounded-full bg-purple-400/50 flex items-center justify-center">
                                                            <span class="text-purple-800 font-bold"><?= $initials ?></span>
                                                        </div>
                                                    </div>
                                                    <h1 class="font-bold text-gray-700 hover:underline">
                                                        By <?= $wiki->fname . ' ' . $wiki->lname ?></h1>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Trendy Categories and Tags Section -->
            <div class="w-full lg:w-4/12 lg:pl-8">
                <div class="px-8">
                    <aside class="w-full rounded-lg border-2 border-purple-600 p-4 mt-16 max-w-sm mx-auto">
                        <h2 class="font-os text-lg font-bold">Latest Categories</h2>
                        <ul class="flex items-start flex-wrap mt-4">
                            <?php
                            foreach ($data['categories'] as $category) {
                                $date = new DateTime($category->created_at);
                            ?>
                                <li class="flex mx-1">
                                    <a class="p-2 px-3 border-purple-800 mb-4 rounded font-medium hover:bg-transparent hover:border-purple-800 border bg-purple-400/25 dark:bg-purple text-purple-800"
                                        href="category/all">
                                        <?= $category->title ?>
                                    </a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </aside>

                    <aside class="w-full rounded-lg border-2 border-purple-600 p-4 mt-16 max-w-sm mx-auto">
                        <h2 class="font-os text-lg font-bold">Trendy Tags</h2>
                        <ul class="flex items-start flex-wrap mt-4">
                            <?php foreach ($data['tags'] as $tag) : ?>
                                <li class="flex mx-1">
                                    <a class="p-2 px-3 border-purple-800 mb-4 rounded font-medium hover:bg-transparent hover:border-purple-800 border bg-purple-400/25 dark:bg-purple text-purple-800"
                                        href="#">
                                        <?= $tag->title ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>
    <script>
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
</script>

</body>

</html>
