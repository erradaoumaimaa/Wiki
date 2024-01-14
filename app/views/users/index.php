<?php
require_once APPROOT . "/views/include/header.php";
?>
<body class="bg-gray-200">
    <a href="<?= URLROOT . '/users/index' ?>" class="back text-gray-600 hover:text-gray-800 ml-4 mt-4">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="login-page flex flex-wrap min-h-screen w-full content-center justify-center bg-gray-200 py-10">
        <div class="md:w-[80%] lg:h-[32rem] lg:w-[60%] flex shadow-md">
            <!-- Login form -->
            <div class="md:w-[50%] w-72 flex flex-wrap content-center justify-center rounded-md md:rounded-l-md bg-white">
                <div class="w-full px-8">
                    <h4 class="title">LogIn</h4>
                    <p>Welcome back! Please login to your account.</p>
                    <!-- Form -->
                    <form action="<?= URLROOT . '/users/login' ?>" method="post" class="mt-4">
                        <!-- Email -->
                        <label for="email">
                            <h4>Email</h4>
                            <input type="email" name="email" id="email" placeholder="example@gmail.com"
                                class="block w-full rounded-md border border-gray-300 focus:border-[242722] focus:outline-none focus:ring-1 focus:ring-[242722] py-1 px-1.5 text-gray-500" required />
                        </label>

                        <!-- Password -->
                        <label for="password" class="mb-3">
                            <h4>Password</h4>
                            <input type="password" name="password" id="password" placeholder="Enter Password"
                                class="block w-full rounded-md border border-gray-300 focus:border-[242722] focus:outline-none focus:ring-1 focus:ring-[242722] py-1 px-1.5 text-gray-500" required />
                        </label>

                        <!-- Submit -->
                        <div class="btns mb-8">
                            <button type="submit" name="sendF"
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
                    <p class="text-gray-600">Already Have an account? <a href="<?= URLROOT . '/users/signupPage' ?>"
                        class="text-indigo-500 hover:underline">SignUp</a></p>
                </div>
            </div>
            <!-- Login banner -->
            <div class="md:w-[50%] bg-cover bg-center"
                style="background-image: url('<?= URLROOT . "/img/bg.jpg" ?>'); height: 32rem;">
            </div>
        </div>
    </div>
</body>

</html>
