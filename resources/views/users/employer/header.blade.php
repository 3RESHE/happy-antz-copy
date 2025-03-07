<header class="bg-white border-b border-gray-200 p-4 flex items-center justify-between sticky top-0 z-50">
    <!-- Hamburger Menu (Mobile Only) -->
    <button id="mobile-menu-button" class="md:hidden text-gray-600 focus:outline-none">
        <i class="fas fa-bars text-xl"></i>
    </button>

    <!-- Title -->
    <h1 class="text-xl font-semibold text-gray-800">Employer Panel</h1>

    <!-- User Dropdown -->
    <div class="flex items-center space-x-4">
        @auth
            <div class="relative flex items-center space-x-2">
                <!-- User Name -->
                <span class="text-sm font-medium text-gray-800 hidden sm:block truncate max-w-[150px]">{{ Auth::user()->name }}</span>
                
                <!-- Profile Icon Button -->
                <button id="user-menu-button" 
                        class="w-10 h-10 bg-accent rounded-full flex items-center justify-center text-gray-700 hover:bg-accent/80 transition duration-200 focus:outline-none shadow-sm">
                    <i class="fas fa-user text-base"></i>
                </button>

                <!-- Dropdown Menu -->
                <div id="user-menu" 
                     class="hidden absolute right-0 mt-2 top-full w-52 bg-white border border-gray-200 rounded-lg shadow-xl overflow-hidden z-50">
                    <div class="px-4 py-2 bg-gray-50 border-b border-gray-100">
                        <span class="text-sm font-semibold text-gray-700 block truncate">{{ Auth::user()->name }}</span>
                        <span class="text-xs text-gray-500 block">Employer</span>
                    </div>
                    <a href="{{ route('profile.edit') }}" 
                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary hover:text-white transition duration-150 ease-in-out">
                        Profile
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" 
                                class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-primary hover:text-white transition duration-150 ease-in-out">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        @else
            <div class="flex items-center space-x-4">
                <a href="{{ route('login') }}">
                    <button class="px-4 py-2 text-sm font-medium bg-primary text-white rounded-md hover:bg-primary/90 transition duration-200 shadow-sm">
                        Login
                    </button>
                </a>
                <a href="{{ route('register') }}">
                    <button class="px-4 py-2 text-sm font-medium bg-primary text-white rounded-md hover:bg-primary/90 transition duration-200 shadow-sm">
                        Register
                    </button>
                </a>
            </div>
        @endauth
    </div>
</header>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // User Dropdown
        const userMenuButton = document.getElementById("user-menu-button");
        const userMenu = document.getElementById("user-menu");
        if (userMenuButton) {
            userMenuButton.addEventListener("click", function (event) {
                userMenu.classList.toggle("hidden");
                event.stopPropagation();
            });
            document.addEventListener("click", function (event) {
                if (!userMenu.contains(event.target) && event.target !== userMenuButton) {
                    userMenu.classList.add("hidden");
                }
            });
        }

        // Mobile Menu Toggle
        const mobileMenuButton = document.getElementById("mobile-menu-button");
        const sidebar = document.getElementById("sidebar");
        mobileMenuButton.addEventListener("click", function () {
            sidebar.classList.toggle("-translate-x-full");
        });

        // Close sidebar when clicking outside on mobile
        document.addEventListener("click", function (event) {
            if (!sidebar.contains(event.target) && !mobileMenuButton.contains(event.target) && !sidebar.classList.contains("-translate-x-full")) {
                sidebar.classList.add("-translate-x-full");
            }
        });
    });
</script>