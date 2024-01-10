<?php
require_once APPROOT . "/views/include/header.php";

var_dump($_SESSION);?>
<body>
    <div class="flex flex-wrap min-h-screen w-full content-center justify-center bg-gray-200 py-10">
        <!-- Login component -->
        <div class="md:w-[80%] lg:h-[32rem] lg:w-[60%] flex shadow-md">
            <!-- Login form -->
            <div class="md:w-[50%] w-72 flex flex-wrap content-center justify-center rounded-md md:rounded-l-md bg-white">
                <div class="w-full px-8">
                    <!-- Form -->
                    <form action="<?= URLROOT . '/users/login' ?>" method="post" class="mt-4" enctype="multipart/form-data">
                    <!-- Email --> 
                        <div class="mb-3">
                            <label class="mb-2 block text-xs font-semibold">Email</label>
                            <input type="email" name="email" placeholder="Enter your email"
                                class="block w-full rounded-md border border-gray-300 focus:border-[242722] focus:outline-none focus:ring-1 focus:ring-[242722] py-1 px-1.5 text-gray-500" />
                        </div>

                         <!-- Password --> 
                            <div class="mb-3">
                                <label class="mb-2 block text-xs font-semibold">Password</label>
                                <input type="password" name="password" placeholder="*****"
                                    class="block w-full rounded-md border border-gray-300 focus:border-[242722] focus:outline-none focus:ring-1 focus:ring-[242722] py-1 px-1.5 text-gray-500" />
                            </div>
                        <!-- Submit --> 
                        <div class="mb-8">
                            <button
                                class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-3/4 mx-auto py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                    <circle cx="8.5" cy="7" r="4" />
                                    <path d="M20 8v6M23 11h-6" />
                                </svg>
                                <span class="ml-3">
                                    Sign In
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Login banner -->
            <div class="bg-[url('<?= URLROOT . "/img/login.jpg" ?>')] bg-cover bg-right md:w-[50%] flex flex-wrap content-center justify-center rounded-r-md md:flex hidden">
            </div>
        </div>
    </div>
</body>

</html>
