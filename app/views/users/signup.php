<?php
require_once APPROOT . "/views/include/header.php";
?>

<body class="bg-gray-200">
    <a href="<?= URLROOT . '/users/login' ?>" class="back text-gray-600 hover:text-gray-800 ml-4 mt-4">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="flex items-center justify-center min-h-screen">
        <div class="lg:flex lg:w-[80%] bg-white shadow-md rounded-md overflow-hidden">
            <!-- Sign up form -->
            <div class="lg:w-[50%] p-8">
                <h4 class="text-2xl font-bold mb-4">Sign Up</h4>
                <p class="text-gray-600">Let's get started! Please create an account.</p>
                <!-- Form -->
                <form action="<?= URLROOT . '/users/signup' ?>" method="post" class="mt-4" enctype="multipart/form-data">
                    <!-- First and Last Name -->
                    <div class="flex justify-between mb-4">
                        <div class="w-1/2 mr-2">
                            <label for="fname" class="block text-xs font-semibold text-gray-600">First Name</label>
                            <input type="text" name="fname" id="fname" placeholder="Enter your first name"
                                class="w-full rounded-md border border-gray-300 focus:border-[#242722] focus:outline-none focus:ring-1 focus:ring-[#242722] py-2 px-3 text-gray-600"
                                required />
                        </div>
                        <div class="w-1/2 ml-2">
                            <label for="lname" class="block text-xs font-semibold text-gray-600">Last Name</label>
                            <input type="text" name="lname" id="lname" placeholder="Enter your last name"
                                class="w-full rounded-md border border-gray-300 focus:border-[#242722] focus:outline-none focus:ring-1 focus:ring-[#242722] py-2 px-3 text-gray-600"
                                required />
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="block text-xs font-semibold text-gray-600">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email"
                            class="w-full rounded-md border border-gray-300 focus:border-[#242722] focus:outline-none focus:ring-1 focus:ring-[#242722] py-2 px-3 text-gray-600"
                            required />
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <label for="password" class="block text-xs font-semibold text-gray-600">Password</label>
                        <input type="password" name="password" placeholder="*****"
                            class="w-full rounded-md border border-gray-300 focus:border-[#242722] focus:outline-none focus:ring-1 focus:ring-[#242722] py-2 px-3 text-gray-600"
                            required />
                    </div>

                    <!-- Submit Button -->
                    <div class="mb-4">
                        <button
                            class="w-full bg-indigo-500 text-gray-100 py-2 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out">
                            <span class="flex items-center justify-center">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                    <circle cx="8.5" cy="7" r="4" />
                                    <path d="M20 8v6M23 11h-6" />
                                </svg>
                                Sign Up
                            </span>
                        </button>
                    </div>
                </form>
                <p class="text-gray-600">Already Have an account? <a href="<?= URLROOT . '/users/loginPage' ?>"
                        class="text-indigo-500 hover:underline">Log In</a></p>
            </div>

            <!-- Login banner -->
            <div class="hidden lg:block lg:w-[50%] bg-cover"
                style="background-image: url('<?= URLROOT . "/img/bgs.jpg" ?>');">
            </div>
        </div>
    </div>

    <script src="<?= URLROOT . '/js/main.js' ?>"></script>
</body>

</html>
