<?php
require_once APPROOT . "/views/include/header.php";
?>
<!-- nav -->
<body class="overflow-x-hidden bg-gray-100">
    <nav class="px-6 py-4 bg-white shadow">
        <div class="container flex flex-col mx-auto md:flex-row md:items-center md:justify-between">
            <div class="flex items-center justify-between">
                <div>
                    <a href="<?php echo URLROOT; ?>/users/index" class="text-xl font-bold text-gray-800 md:text-2xl">WikiCrafting</a>
                </div>
                <div>
                    <button type="button" class="block text-gray-800 hover:text-gray-600 focus:text-gray-600 focus:outline-none md:hidden">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="flex-col hidden md:flex md:flex-row md:-mx-4">
                <a href="<?php echo URLROOT; ?>/users/index"class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0">Home</a>
                <a href="<?php echo URLROOT; ?>/users/loginPage " class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0">Sign in</a>
                <a href="<?php echo URLROOT; ?>/users/signupPage" class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0">Sign up</a>
            </div>
        </div>
    </nav>

            <div class="dark:bg-gray-800">
    <div class="dark:bg-transparent">
        <div class="mx-auto flex flex-col items-center py-12 sm:py-24">
            <div class="w-11/12 sm:w-2/3 lg:flex justify-center items-center flex-col mb-5 sm:mb-10">
                <h1
                    class="text-4xl sm:text-5xl md:text-5xl lg:text-5xl xl:text-6xl text-center text-gray-800 dark:text-white font-black leading-10">
                    Welcome Visitor!
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
                        <button class="inline-flex items-center gap-2 bg-violet-700 text-white text-lg font-semibold py-3 px-6 rounded-r-md">
                    <span>Find</span>
                    <svg class="text-gray-200 h-5 w-5 p-0 fill-current" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                        viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                        xml:space="preserve">
                        <path
                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                    </svg>
                </button>

                </div>
            </div>
        </div>
    </div>
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
                                <div class="mb-6">
                                    <?php
                                    $date = new DateTime($wiki->created_at);
                                    ?>
                                    <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                                        <div class="flex items-center justify-between">
                                            <span class="font-light text-gray-600"><?= $date->format('M d, Y') ?></span>
                                            <a href="#" class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500"><?= $wiki->category ?></a>
                                        </div>
                                        <div class="mt-2">
                                            <a href="#" class="text-2xl font-bold text-gray-700 hover:underline"><?= $wiki->title ?></a>
                                            <p class="mt-2 text-gray-600"><?= $wiki->content ?></p>
                                        </div>
                                        <div class="flex items-center justify-between mt-4">
                                            <a href="<?php echo URLROOT; ?>/wikis/wikiDetails/<?php echo $wiki->id; ?>" class="text-blue-500 hover:underline">Read more</a>
                                            <div>
                                                <a href="#" class="flex items-center">
                                                    <?php
                                                    // Extract the first character from fname and lname
                                                    $initials = strtoupper(substr($wiki->fname, 0, 1) . substr($wiki->lname, 0, 1));
                                                    ?>
                                                    <div class="relative flex-shrink-0">
                                                        <!-- Placeholder avatar with purple background and initials -->
                                                        <div class="w-10 h-10 mx-4 rounded-full bg-purple-400/50 flex items-center justify-center">
                                                            <span class="text-purple-800 font-bold"><?= $initials ?></span>
                                                        </div>
                                                    </div>
                                                    <h1 class="font-bold text-gray-700 hover:underline">By <?= $wiki->fname . ' ' . $wiki->lname ?></h1>
                                                </a>
                                            </div>


                                            
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                                
                    <!-- Trendy Tags Section -->
                    <div class="hidden lg:block w-4/12 lg:pl-8">
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
                <?= $category->title !== null ? $category->title : 'Category Not Assigned' ?>
            </a>
        </li>
        <?php
        }
        ?>
    </ul>
</aside>

            </div>
                    <div class="px-8 mt-10">
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
    </div>


    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>

</body>

</html>