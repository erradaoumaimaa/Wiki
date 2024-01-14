<div x-data="{ open: false }">
        <!-- Navbar -->
        <nav class="bg-white p-4 border-b border-gray-200">
            <div class="container mx-auto flex items-center justify-between">
                <!-- Logo/Brand -->
                <div>
                    <a href="<?php echo URLROOT; ?>/users/dashboard" class="text-gray-800 text-xl font-bold">WikiCrafting</a>
                </div>

                <!-- Navigation links for desktop -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="<?php echo URLROOT; ?>/users/dashboard" class="text-gray-800">Home</a>
                    <a href="<?php echo URLROOT; ?>/wikis/addWiki" class="text-gray-800">Add Wiki</a>
                    <a href="<?php echo URLROOT; ?>/users/logout" class="text-gray-800">LogOut</a>
                </div>

                <!-- Hamburger icon for mobile -->
                <div class="md:hidden">
                    <button @click="open = !open" class="text-gray-800 focus:outline-none">
                        <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>

        <!-- Navigation links for mobile -->
        <div x-show="open" class="md:hidden bg-white text-gray-800">
            <a href="<?php echo URLROOT; ?>/users/dashboard" class="block p-2">Home</a>
            <a href="<?php echo URLROOT; ?>/wikis/addWiki" class="block p-2">Add Wiki</a>
            <a href="<?php echo URLROOT; ?>/users/logout" class="block p-2">LogOut</a>
        </div>
    </div>