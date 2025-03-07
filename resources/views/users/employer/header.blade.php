<!-- Header -->
<header class="bg-white border-b border-gray-200 p-4 flex justify-between items-center sticky top-0 z-30 shadow-sm">
    <div class="flex items-center space-x-4">
        <!-- Hidden on mobile when sidebar is closed -->
        <h1 class="text-xl font-semibold text-gray-800 hidden md:block">Employer Panel</h1>
    </div>

    <!-- User Dropdown -->
    @auth
        <div class="relative flex items-center space-x-3">
            <!-- Profile Icon Button -->
            <div class="relative group">
                <button id="user-menu-button"
                    class="w-10 h-10 bg-accent rounded-full flex items-center justify-center focus:outline-none hover:bg-accent/80 transition-colors duration-200 shadow-sm">
                    <span class="text-gray-700 font-medium text-lg group-hover:scale-110 transition-transform duration-200">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </span>
                </button>

                <!-- Dropdown Menu -->
                <div id="user-menu" class="hidden absolute right-0 mt-2 w-56 bg-white border border-gray-200 rounded-lg shadow-xl overflow-hidden transform origin-top-right transition-all duration-200 scale-95 opacity-0 group-focus-within:scale-100 group-focus-within:opacity-100">
                    <!-- User Info -->
                    <div class="px-4 py-3 bg-gray-50 border-b border-gray-200">
                        <p class="text-sm font-medium text-gray-800">{{ Auth::user()->name }}</p>
                        <p class="text-xs text-gray-500">{{ Auth::user()->email }}</p>
                    </div>
                    <!-- Menu Items -->
                    <a href="{{ route('profile.edit') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary hover:text-white transition-colors duration-150 flex items-center space-x-2">
                        <i class="fas fa-user-edit w-4"></i>
                        <span>Profile</span>
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <button type="submit"
                            class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-red-600 hover:text-white transition-colors duration-150 flex items-center space-x-2">
                            <i class="fas fa-sign-out-alt w-4"></i>
                            <span>Logout</span>
                        </button>
                    </form>
                </div>
            </div>
            <!-- User Name -->
            <span class="text-sm font-medium text-gray-800 hidden sm:block">{{ Auth::user()->name }}</span>
        </div>
    @else
        <!-- Login/Register Buttons -->
        <div class="flex items-center space-x-4">
            <a href="{{ route('login') }}">
                <button class="px-4 py-2 text-sm font-medium bg-primary text-white rounded-md hover:bg-primary/90 transition-colors duration-200 shadow-sm">
                    Login
                </button>
            </a>
            <a href="{{ route('register') }}">
                <button class="px-4 py-2 text-sm font-medium bg-primary text-white rounded-md hover:bg-primary/90 transition-colors duration-200 shadow-sm">
                    Register
                </button>
            </a>
        </div>
    @endauth
</header>

<!-- JavaScript -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const userMenuButton = document.getElementById("user-menu-button");
        const userMenu = document.getElementById("user-menu");

        if (userMenuButton) {
            userMenuButton.addEventListener("click", function (event) {
                userMenu.classList.toggle("hidden");
                userMenu.classList.toggle("scale-95");
                userMenu.classList.toggle("opacity-0");
                userMenu.classList.toggle("scale-100");
                userMenu.classList.toggle("opacity-100");
                event.stopPropagation();
            });

            document.addEventListener("click", function (event) {
                if (!userMenu.contains(event.target) && event.target !== userMenuButton) {
                    userMenu.classList.add("hidden", "scale-95", "opacity-0");
                    userMenu.classList.remove("scale-100", "opacity-100");
                }
            });

            userMenu.addEventListener("click", function (event) {
                event.stopPropagation();
            });
        }
    });
</script>