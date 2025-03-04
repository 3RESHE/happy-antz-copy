<!-- Header -->
<header class="bg-white border-b border-gray-200 p-4 flex justify-between items-center sticky top-0">
    <h1 class="text-xl font-semibold text-gray-800">Employer Panel</h1>

    <!-- User Dropdown -->
    @auth
        <div class="relative flex items-center space-x-3">
            <!-- Profile Icon Button -->
            <div class="relative">
                <button id="user-menu-button"
                    class="w-8 h-8 bg-accent rounded-full flex items-center justify-center focus:outline-none">
                    <i class="fas fa-user text-gray-700"></i>
                </button>

                <!-- Dropdown Menu (Directly Below Icon) -->
                <div id="user-menu" class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden">
                    <a href="{{ route('profile.edit') }}"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary hover:text-white transition">
                        Profile
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="w-full text-left px-4 py-2 text-sm hover:bg-primary text-gray-700 hover:text-white transition">
                            Logout
                        </button>
                    </form>
                </div>
            </div>

            <!-- User Name (Separate) -->
            <span class="text-sm font-medium text-gray-800">{{ Auth::user()->name }}</span>
        </div>
    @else
        <!-- Login/Register Buttons -->
        <div class="flex items-center space-x-4">
            <a href="{{ route('login') }}">
                <button class="px-4 py-2 text-sm font-medium bg-primary text-white rounded-md hover:bg-primary/90">
                    Login
                </button>
            </a>
            <a href="{{ route('register') }}">
                <button class="px-4 py-2 text-sm font-medium bg-primary text-white rounded-md hover:bg-primary/90">
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
                event.stopPropagation();
            });

            document.addEventListener("click", function () {
                userMenu.classList.add("hidden");
            });

            userMenu.addEventListener("click", function (event) {
                event.stopPropagation();
            });
        }
    });
</script>
